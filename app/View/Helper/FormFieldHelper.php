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

    private function inputDefaults($helpText, $labelText) {
        $after = '';
        // if($helpText !== null) {
        //     $after .= "<span class='help-block'>$helpText</span>";
        // }
        $after .= '</div></div>';

        $label = array(
            'text' => $labelText,
            'class' => 'control-label'
        );

        return array(
            'div' => false,
            'placeholder' => false,
            'before' => "<div class='control-group'>",
            'between' => "<div class='controls'>",
            'after' => $after,
            'label' => $label,
            'data-content' => $helpText
        );
    }

    private function makeCommonOptions($labelText, $tip=null, $detailedTip=null) {
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
        $strippedKeys = array('field', 'label', 'tip', 'detailedTip');
        foreach($strippedKeys as $k){
            $$k = isset($options[$k]) ? $options[$k] : null;
            unset($options[$k]);
        }

        $options = array_merge(
            $this->makeCommonOptions($label, $tip, $detailedTip),
            $options
        );

        return $this->Form->input($field, $options);


    }

    public function text($field, $labelText, $helpText=null, $rows=null, $class=null) {
        /* Returns a Bootstrap, form-horizontal style text input field.

        If $rows is specified, this returns a textarea instead. */

        $options = $this->inputDefaults($helpText, $labelText);

        if($rows !== null) {
            $options['rows'] = $rows;
        }

        if($class !== null) {
            $options['class'] = $class;
        }

        return $this->Form->input(
            $field, $options
        );
    }

    public function dropdownbox($options) {
        $strippedKeys = array('field', 'label', 'tip', 'detailedTip');
        foreach($strippedKeys as $k){
            $$k = isset($options[$k]) ? $options[$k] : null;
            unset($options[$k]);
        }

        $options = array_merge(
            $this->makeCommonOptions($label, $tip, $detailedTip),
            $options
        );

        return $this->Form->input($field, $options);
    }

    public function dropdown($field, $labelText, $options, $helpText=null, $class=null) {
        return $this->select($field, $labelText, $options, $helpText, null, $class);
    }

    public function multi($field, $labelText, $options, $helpText=null, $class=null) {
        return $this->select($field, $labelText, $options, $helpText, true, $class);
    }

    public function checkboxes($options) {
        return $this->dropdownbox(
            array_merge($options, array('multiple' => 'checkbox'))
        );
    }

    private function select($field, $labelText, $options, $helpText, $multi=False, $class=null) {
        $helpHtml = $this->generateHelpSpan($helpText);

        // Add options for selection

        $params = array_merge(
            $this->inputDefaults($helpText, $labelText),
            array('options' => $options)
        );

        $params['multiple'] = $multi;
        $params['class'] = $class;

        return $this->Form->input($field, $params);
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