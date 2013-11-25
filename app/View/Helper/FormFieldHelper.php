<?php
class FormFieldHelper extends AppHelper {
    public $helpers = array('Form');

    private function generateHelpSpan($helpText) {
        if($helpText !== null) {
            return "<span class='help-block'>$helpText</span>";
        } else {
            return '';
        }

    }

    private function _default_options($labelText, $tip=null, $detailedTip=null) {
        /* Returns a string-keyed array of options to pass to Form::input() */
        $options = array(
            'div' => false,
            'placeholder' => false,
            'before' => "<div class='control-group'>",
            'between' => "<div class='controls'>",
            'after' => '</div></div>',
            'label' => array(
                'text' => $labelText,
                'class' => 'control-label'
            )
        );

        if($detailedTip !== null) {
            $options['after'] = "<span class='help-block'><button class='btn btn-small btn-info helpModalToggle'>Detailed Help</button></span>
            <div class='modal hide fade help-modal' tabindex='-1' role='dialog'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>×</button>
                    <h3>" . $labelText . "</h3>
                </div>
                <div class='modal-body'>" . $detailedTip . "</div>
                <div class='modal-footer'>
                    <button class='btn btn-primary' data-dismiss='modal'>OK</button>
                </div>
            </div>" . $options['after'];
        }

        if($tip !== null) {
            $options['after'] = "<div class='hide help-popover'>$tip</div>" . $options['after'];
        }

        return $options;
    }

    public function textbox($options) {
        /* Returns a regular textbox or a textarea, per Form:input()'s
        introspection on the model field
        */
        $strippedKeys = array('field', 'label', 'tip', 'detailedTip');
        foreach($strippedKeys as $k){
            $$k = isset($options[$k]) ? $options[$k] : null;
            unset($options[$k]);
        }

        $options = array_merge(
            $this->_default_options($label, $tip, $detailedTip),
            $options
        );

        return $this->Form->input($field, $options);


    }

    public function dropdownbox($options) {
        $strippedKeys = array('field', 'label', 'tip', 'detailedTip');
        foreach($strippedKeys as $k){
            $$k = isset($options[$k]) ? $options[$k] : null;
            unset($options[$k]);
        }

        $options = array_merge(
            $this->_default_options($label, $tip, $detailedTip),
            $options
        );

        return $this->Form->input($field, $options);
    }

    public function checkboxes($options) {
        return $this->dropdownbox(
            array_merge($options, array('multiple' => 'checkbox'))
        );
    }

    public function inputGroupStart($options=null) {
        $options = $options === null ? array() : $options;

        $tag = '<fieldset';

        $classes = array();

        if(isset($options['hidden']) and $options['hidden'] == true) {
            $classes[] = 'hide';
        }
        if(isset($options['class'])){
            $classes[] = $options['class'];
        }

        if(sizeof($classes) > 0){
            $tag .= ' class="' . join(' ', $classes) . '"';
        }

        $tag .= '>';

        return $tag;
    }

    public function inputGroupEnd() {
        return '</fieldset>';
    }
}
?>