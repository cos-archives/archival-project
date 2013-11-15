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

    public function dropdown($field, $labelText, $options, $helpText=null, $class=null) {
        return $this->select($field, $labelText, $options, $helpText, null, $class);
    }

    public function multi($field, $labelText, $options, $helpText=null, $class=null) {
        return $this->select($field, $labelText, $options, $helpText, true, $class);
    }

    public function checkboxes($field, $labelText, $options, $helpText=null, $class=null) {
        return $this->select($field, $labelText, $options, $helpText, 'checkbox', $class);
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