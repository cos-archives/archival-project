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
        if($helpText !== null) {
            $after .= "<span class='help-block'>$helpText</span>";
        }
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
            'label' => $label
        );
    }

    public function text($field, $labelText, $helpText=null, $rows=null) {
        /* Returns a Bootstrap, form-horizontal style text input field.

        If $rows is specified, this returns a textarea instead. */

        $options = $this->inputDefaults($helpText, $labelText);

        if($rows !== null) {
            $options['rows'] = $rows;
        }

        return $this->Form->input(
            $field, $options
        );
    }

    public function dropdown($field, $labelText, $options, $helpText=null) {
        return $this->select($field, $labelText, $options, $helpText);
    }

    public function multi($field, $labelText, $options, $helpText=null) {
        return $this->select($field, $labelText, $options, $helpText, true);
    }

    public function checkboxes($field, $labelText, $options, $helpText=null) {
        return $this->select($field, $labelText, $options, $helpText, 'checkbox');
    }

    private function select($field, $labelText, $options, $helpText, $multi=False) {
        $helpHtml = $this->generateHelpSpan($helpText);

        // Add options for selection
        $params = array_merge(
            $this->inputDefaults($helpText, $labelText),
            array('options' => $options)
        );

        $params['multiple'] = $multi;

        return $this->Form->input($field, $params);
    }

    public function inputGroupStart($options=null) {
        $options = $options === null ? array() : $options;

        $tag = '<fieldset';
        if(isset($options['hidden']) and $options['hidden'] == true) {
            $tag .= " class='hidden'";
        }
        $tag .= '>';
        return $tag;
    }

    public function inputGroupEnd() {
        return '</fieldset>';
    }
}
?>