$(function() {
    updateProgressBars = function(opts) {
        opts = opts === undefined ? {} : opts;
        var P = this;

        var setOption = function(val, def) { return opts[val]===undefined ? def : opts[val]; }

        P.selector = setOption('selector', '.progress-section');

        // Constants
        var inputSelector = 'input[type!="hidden"], select, textarea';

        // Build sections
        var sections = $(P.selector);

        var getChildInputs = function(elem) {
            return $(elem).find(inputSelector).not(
                $(elem).find(P.selector).find(inputSelector)
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

    }

    foo = updateProgressBars({'selector': '.study, .test'});
});