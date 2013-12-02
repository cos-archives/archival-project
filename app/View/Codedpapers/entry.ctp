<style>
    .block {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
    }
    .block h1 {
        font-size: 24px;
        line-height: normal;
        margin-top:0;
    }
    #static-sidebar {
        position:fixed;
    }


    #static-sidebar .has-switch > div {
        width: calc(150% + 1px);
    }


    #outline {
        margin:0;
    }

    #outline li {
        line-height:24px;
    }
    #outline li.unnamed > a {
        font-style:italic;
        color:#666;
    }
    #outline li.active > a {
        font-weight:bold;
    }
    #outline ol {
        margin-bottom:0;
    }
    #outline li li {
        padding-left:10px;
    }

    #outline .progress {
        display: inline-block;
        width: 100px;
        height: 16px;
        margin-bottom: 0;
        float: right;
        margin-top: 4px;
    }

    #totalProgress {
        margin:10px 0;
    }

    .progress {
        background-image: linear-gradient(to bottom,#DDDDDD,#E9E7E7);
        position:relative;
    }


    .progress div.title {
        position:absolute;
        top:0;
        left:0;
        text-align:center;
        width:100%;
    }


    #coding-form header {
        margin-top:0;
        padding: 0;
    }
    #coding-form header h3 {
        margin-top:0px;
        line-height: 30px;
    }

    #coding-form header button {
        float:right;
    }
    #coding-form .test {
        border-top: 1px solid #CFCFCF;
        padding-top: 10px;
    }
    #coding-form .test:last-child {
        border-bottom: 1px solid #CFCFCF;
    }

    #coding-form .formFooter,
    #coding-form .studyFooter,
    #coding-form .testFooter {
        padding:20px 0;
        background-color:#ddd;
        /*border-left:5px solid blue;*/
    }
    #coding-form .formFooter .buttons,
    #coding-form .studyFooter .buttons,
    #coding-form .testFooter .buttons {
        text-align:right;
        padding-right:20px;
    }
    #coding-form .testFooter {
        margin-bottom:20px;
    }

    #coding-form .control-group {
        padding-left:10px;
        padding-right:10px;
    }
    #coding-form .controls {
        position:relative;
    }
    #coding-form .helpModalToggle {
        margin-top:5px;
    }
    .hide {
        display: none;
    }

    kbd {
        padding: 2px 4px;
        color: #f89406;
        white-space: nowrap;
        background-color: #f7f7f9;
        border: 1px solid #e1e1e8;
        border-radius:3px;
        font-size:12px;
    }


</style>
<div class='span4' id='static-sidebar'>
    <div class='block'>
        <div>
            <input type='checkbox' id='chkComplete' style='display:none' />
        </div>
        <div id='totalProgress' class="progress">
            <div class="bar" style="width: 0%;"></div>
            <div class='title'>Overall Progress</div>
        </div>
        <ol id='outline' class='nav hide'>
        </ol>
    </div>
</div>
<div class='span8 offset4' id='coding-form'><!-- Offset is required because the sidebar is fixed. -->
    <?php echo $this->Session->flash(); ?>
    <div class='block'>
        <a
            href='/papers/view/<?php echo $this->data['Paper']['id']; ?>'
            class='btn btn-success pull-right'
            target='_blank'
        >Open Full Paper</a>
        <h1><?php echo $this->data['Paper']['title']; ?></h1>
        <blockquote><?php echo $this->data['Paper']['abstract']; ?></blockquote>

    </div>
    <?php
        echo $this->Form->create(
            'Codedpaper',
            array('class' => 'form-horizontal')
        );
    ?>
    <?php
        echo $this->Form->hidden("Paper.id");
        echo $this->Form->hidden("Paper.DOI");
        echo $this->Form->hidden("Codedpaper.id");
        echo $this->Form->hidden("Codedpaper.paper_id");
    ?>
    <?php
        for($i=0; $i<sizeof($this->data['Study']); $i++) {
            echo $this->element('partials/study', array(
                'i' => $i,
                'data' => $this->data,
                'study' => $this->data['Study'][$i]
            ));
        }
    ?>
        <div class='studyFooter'>
            <div class='buttons'>
                <a class='btn btn-primary'>Add Study</a>
            </div>
        </div>
        <div class='formFooter'>
            <div class='buttons'>
                <?php echo $this->Form->hidden('Codedpaper.completed'); ?>
                <input type='submit' class='btn btn-success' />
            </div>
        </div>
    <?php echo $this->Form->end(); ?>
</div><!-- #coding-form -->
<script>




$(function() {

    /* show/hide is-replication div based on form value */
    $('.is-replication').on('change', function(e) {
        t = $(e.target).closest('.study').find('.replication-fields')
        $(e.target).val() == 'Replication' ? t.slideDown() : t.slideUp();
    }).trigger('change');

    var initSections = function() {

        $('.study').find('input, select, textarea').popover({
            /* field hovers */
            'trigger': 'hover',
            'html': true,
            'content': function() {
                return $('.control-group:hover .help-popover').html();
            }
        });

        $('.helpModalToggle').one('click', function(e) {
            /* "Detailed Help" buttons */
            modal = $(e.target).closest('.control-group').find('.help-modal').modal();
            e.preventDefault();
            x = modal;
        })

        $('.deleteSection').on('click', function(e) {
            e.preventDefault();

            if( $(e.target).closest('.test').length === 1 ) {
                var parent = $(e.target).closest('.test');

                $.post('/tests/delete/' + parent.data('test-id'),
                    {
                        'success': function(d) {
                            // remove list item
                            $('#outline a[href="#' + parent.attr('id') + '"]').parent()
                                .slideUp({
                                    'done': function () {
                                        this.remove();
                                    }
                                });

                            // remove form secions
                            parent.slideUp({'done': function() {this.remove(); }});

                        }
                    }
                );
            } else {
                var parent = $(e.target).closest('.study');

                $.post('/studies/delete/' + parent.data('study-id'),
                {
                    'success': function (d) {
                        $('#outline a[href="#' + parent.attr('id') + '"]').parent()
                            .slideUp({
                                'done': function() {
                                    this.remove();
                                }
                            });

                        parent.slideUp({'done': function() {this.remove(); }});
                    }
                })
            }
        });

        $('.studyFooter a.btn').off('click').on('click', addStudy);
        $('.testFooter a.btn').off('click').on('click', addTest);
        $('.title_entry').off('input').on('input', changeTitle);

        $('[data-spy="scroll"]').each(function () {
          var $spy = $(this).scrollspy('refresh')
        });

        $('#outline a').off('click').on('click', function(e){
            e.preventDefault();
            $.scrollTo( this.hash, 200, {
                'offset': {'top': -90 }
            });
        });
    }

    // Build the initial outline
    var ol = $('#outline');
    var studies = $('.study');
    for(var i=0; i<studies.length;i++) {
        var tests = $(studies[i]).find('.test');
        var li = $('<li class="unnamed"><div class="progress"><div class="bar" style="width: 0%;"></div></div><a href="#s' + i + '">Unnamed Study</a></li>')
        if(tests.length > 0) {
            var sublist = $('<ol class="nav"></ol>');
            for(var j=0; j<tests.length; j++) {
                sublist.append('<li class="unnamed"><div class="progress"><div class="bar" style="width: 0%;"></div></div><a href="#s' + i + 't' + j + '">Unnamed Test</a></li>');
            }
            li.append(sublist);
        }

        ol.append(li);
    }

    initSections();

    $('.title_entry').trigger('input');

    $('#outline').slideDown()
    $('body').scrollspy({'offset': 91});

    function changeTitle(e) {
        var field = $(e.target);
        var div = field.closest('.study, .test')
        var sectionHeader = div.find(' > header > h3');
        var outlineLink = $('#outline a[href="#' + div.attr('id') + '"]');
        var blank = false;

        // set the header's data-original-text if it hasn't yet been set.
        if (! sectionHeader.data('original-text') ) {
            sectionHeader.data('original-text', sectionHeader.text());
        }

        // determine the section's title
        var title = sectionHeader.data('original-text');
        if (field.val() != '') {
            title = field.val()
            blank = false;
        } else {
            blank = true;
        }

        sectionHeader.text(title);
        outlineLink.text(title);

        if(blank) {
            outlineLink.parent().addClass('unnamed');
        } else {
            outlineLink.parent().removeClass('unnamed');
        }
        foo = outlineLink.parent();
    }

    function addTest(e) {
        /* Add Test Button */
        e.preventDefault();

        var t = $(e.target).closest('.study').find('.test').length;
        var s = $(e.target).closest('.study').data('study-seq');
        var study_id = $(e.target).closest('.study').data('study-id');

        foo = e

        //  return

        $.get(
            '/tests/shell/' + study_id + '/' + s + '/' + t,
            function(d) {
                // Add inputs to the form
                d = $(d);

                d.insertBefore( $(e.target).closest('.study').find('.testFooter') )
                    .hide()
                    .slideDown();

                // Add test to the list
                var li = $('<li class="unnamed"><div class="progress"><div class="bar" style="width: 0%;"></div></div><a href="#s' + s + 't' + t + '">Test ' + (s+1) + '.' + (t+1) + '</a></li>')
                    .hide()
                    .appendTo('ol#outline li:nth-of-type(' + (s+1) + ') > ol')
                    .slideDown();

                // Add the list item to the test's div
                d.data('menu-item', li);

                // Make the buttons and such work.
                initSections();
            }
        );

    }


    function addStudy(e){
        /* Add Study Button */
        e.preventDefault();

        var codedpaper_id = $('#CodedpaperId').val();
        var num_studies = $('.study').length;

        $.get(
            '/studies/shell/' + codedpaper_id + '/' + num_studies,
            function(d) {
                // Add inputs to the form
                d = $(d);
                d.insertBefore($('.studyFooter'))
                    .hide()
                    .slideDown();

                // Add study and test to the list
                var html = '<li class="unnamed"><div class="progress"><div class="bar" style="width: 0%;"></div></div><a href="#s' + num_studies + '">Unnamed Study</a>';
                html = html + '<ol class="nav"><li class="unnamed"><div class="progress"><div class="bar" style="width: 0%;"></div></div><a href="#s' + num_studies + 't0">Unnamed Test</a></li></ol>';
                $(html).hide()
                    .appendTo('ol#outline')
                    .slideDown();


                // Make the buttons and such work.
                initSections();
            }
        )
    }
});

</script>
<script src='/js/entry.js'></script>