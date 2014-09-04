$(function() {
    $(document).on('change', '.exclusions input[type=number]', function(e) {
      var value = Number($(e.target).val());
      if( value % 1 !== 0 || value < 0 ) {
        $(e.target).addClass('error')
      } else {
        $(e.target).removeClass('error')
      }

      var resultElement = $($('.exclusions input[type=number]')[2]);

      if( resultElement.val() < 0 ) {
        resultElement.addClass('error')
      } else {
        resultElement.removeClass('error')
      }
    })

    function updateProgressBars(opts) {
        opts = opts === undefined ? {} : opts;
        var P = this;

        var setOption = function(val, def) { return opts[val]===undefined ? def : opts[val]; }

        P.selector = setOption('selector', '.progress-section');

        // Constants
        this.inputSelector = 'input[type!="hidden"], select, textarea';

        // Build sections
        var sections = $(P.selector);

        var getChildInputs = function(elem) {
            return $(elem).find(P.inputSelector).not(
                $(elem).find(P.selector).find(P.inputSelector)
            );
        };

        var notEmpty = function(elem) {
            var e = $(elem);
            var val = 0;

            if( elem.nodeName.toLowerCase() == 'input' && e.attr('type') == 'checkbox' ) {
                if( e.prop('checked') ){
                    val = 1;
                }
            } else {
                val = e.val() ? 1 : 0;
            }

            return val;
        };

        var calculateChildInputs = function() {
            sections.each(function(i, el) {
                var fields = getChildInputs(el);
                $(el)
                    .data('progress-total', fields.length)
                    .data('progress-done', function() {
                        var total = 0;
                        fields.each(function(i, elem) { total += notEmpty(elem) });
                        return total;
                    }()
                );
            });
        };

        calculateChildInputs();

        var calculateChildSections = function () {
            sections.each(function(i, el) {
                var e = $(el);
                var sectionTotal = 0;
                var sectionDone = 0;
                e.find(P.selector).each(function(i, childEl) {
                    sectionTotal += $(childEl).data('progress-total');
                    sectionDone += $(childEl).data('progress-done')
                });

                e.data(
                    'progress-cumulative-total',
                    e.data('progress-total') + sectionTotal
                ).data(
                    'progress-cumulative-done',
                    e.data('progress-done') + sectionDone
                );

            });
        };

        calculateChildSections();

        var updateBarWidths = function() {
            sections.each(function(i, el) {
                var w = $(el).data('progress-cumulative-done') / $(el).data('progress-cumulative-total')
                w = (Math.round(w * 1000) / 10) + "%";

                $('#outline a[href="#' + $(el).attr('id') + '"]')
                    .parent()
                    .find('> .progress')
                        .attr('title', w)
                    .find('.bar')
                        .css({
                            'width': w
                        });
            });
        }

        updateBarWidths();

        var overallTotal = 0;
        var overallDone = 0;

        for(var i=0;i<sections.length;i++){
            overallTotal += $(sections[i]).data('progress-total');
            overallDone += $(sections[i]).data('progress-done');
        }

        var overallPercent = (Math.round((overallDone/overallTotal) * 1000) / 10) + "%";

        $('#totalProgress')
            .attr('title', overallPercent)
            .find('.bar')
                .css({ 'width': overallPercent });
    }

    $(document).on('change', updateProgressBars.inputSelector, function() {
        updateProgressBars({'selector': '.study, .test'});
    });

    updateProgressBars({'selector': '.study, .test'});

    /* "Complete" Checkbox */
    var confirmCompleteModal = $('#confirmCompleteModal');
    $('#chkComplete')
        .on('change', function(e) {
            $('input[name="data[Codedpaper][completed]"]').val(this.checked ? 1 : 0);
        })
        .prop('checked', function() {
            return $('input[name="data[Codedpaper][completed]"]').val()==1 ? true : false;
        })
        .wrap('<div data-on="success" data-off="danger" />')
            .parent()
            .addClass('make-switch')
            .data({
                'text-label': 'Coding Complete',
                'off': 'danger',
                'off-label': 'No',
                'on': 'success',
                'on-label': 'Yes',
            })
            .css({
                'width': '100%'
            })
            .bootstrapSwitch()
            .on('switch-change', function(e, state) {
              if(state.value ) {
                confirmCompleteModal.modal('show');
              }
            });
    confirmCompleteModal.find(".modal-footer .btn-danger").on('click', function() {
      $('#chkComplete').parent().bootstrapSwitch('setState', false)
    });
    confirmCompleteModal.find(".modal-footer .btn-primary").on('click', function () {
      $('#CodedpaperEntryForm').submit()
    })


    /* Exclusions */
    var initExclusionCalculators = function(){
        $('#coding-form .exclusions .result').each(function(idx, el){
            var el = $(el);
            var hidden_input = $('<input>').attr({
                'type': 'hidden',
                'name': el.attr('name'),
                'value': el.attr('value'),
                'class': 'result'
            });
            el.attr('name', '').attr('disabled', 'disabled')
            el.after(hidden_input);

        });

        $('#coding-form').on('change', '.exclusions input', function(e) {
            var div = $(e.target).closest('.exclusions');
            var total = 0;
            div.find('input').not('.result, [type="hidden"]').each(function(idx, el) {
                var el = $(el)
                switch(el.data('calc-operator')){
                    case '+':
                        total += Number(el.val());
                        break;
                    case '-':
                        total -= Number(el.val());
                        break;
                }
            });
            div.find('.result').val(total);
        });

    }

    initExclusionCalculators();

});