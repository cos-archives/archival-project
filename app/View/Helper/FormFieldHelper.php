<?php
class FormFieldHelper extends FormHelper {
    public $helpers = array('Form');

    private function _default_options($labelText, $tip=null, $detailedTip=null, $otherCoders=null) {
        /* Returns a string-keyed array of options to pass to Form::input() */
        $after = '';
        if ( $otherCoders ) {
          $after .= "<table class='coder-responses table' style='margin-top: 15px;'><tr><th style=\"width:160px\">Reviewer</th><th>Response</th></tr>";
          foreach ( $otherCoders as $other ) {
            $after .= "<tr>";
            $after .= "<td>" . $other['user'] . "</td>";
            $after .= "<td><span>" . $other['value'] . "</span></td>";
            $after .= "</tr>";
          }
          $after .= "</table>";
        }

        $options = array(
            'div' => false,
            'placeholder' => false,
            'before' => "<div class='control-group'>",
            'between' => "<div class='controls'>",
            'after' => "</div>$after</div>",
            'label' => array(
                'text' => $labelText,
                'class' => 'control-label'
            ),
        );

        if($detailedTip !== null) {
            $options['after'] = "<button class='btn btn-small btn-info helpModalToggle'>Detailed Help</button>
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
        $strippedKeys = array('field', 'label', 'tip', 'detailedTip', 'otherCoders');

        foreach($strippedKeys as $k){
            $$k = isset($options[$k]) ? $options[$k] : null;
            unset($options[$k]);
        }

        $options = array_merge(
            $this->_default_options($label, $tip, $detailedTip, $otherCoders),
            $options
        );

        return $this->Form->input($field, $options);


    }

    public function dropdownbox($options) {
        $strippedKeys = array('field', 'label', 'tip', 'detailedTip', 'otherCoders');
        foreach($strippedKeys as $k){
            $$k = isset($options[$k]) ? $options[$k] : null;
            unset($options[$k]);
        }

        $options = array_merge(
            $this->_default_options($label, $tip, $detailedTip, $otherCoders),
            $options
        );

        $this->setEntity($field);

        return $this->Form->input($field, $options);
    }

    public function checkboxes($options) {
        $strippedKeys = array('field', 'label', 'tip', 'detailedTip', 'otherCoders');
        foreach($strippedKeys as $k){
            $$k = isset($options[$k]) ? $options[$k] : null;
            unset($options[$k]);
        }

        // Get the value of the selected items for the current field
        $this->setEntity($field);
        $value = $this->value();
        $selected = explode(',', $value['value']);

        $options = array_merge(
            array(
                'multiple' => 'checkbox',
                'hiddenField' => false,
                'selected' => $selected
            ),
            $this->_default_options($label, $tip, $detailedTip, $otherCoders),
            $options
        );

        return $this->Form->input($field, $options);
    }

    public function radios($options) {
      // Remove the null value from the options list.
      unset($options['options']['']);

      $strippedKeys = array('field', 'label', 'tip', 'detailedTip', 'otherCoders');
      foreach($strippedKeys as $k){
          $$k = isset($options[$k]) ? $options[$k] : null;
          unset($options[$k]);
      }

      // Get the value of the selected items for the current field
      $this->setEntity($field);
      $value = $this->value();
      $selected = explode(',', $value['value']);

      $attributes = array(
        'legend' => false,
        'separator' => '<br>',
      );

      $options = array_merge(
          array(
              // 'multiple' => 'checkbox',
              'hiddenField' => false,
              'selected' => $selected,
          ),
          $this->_default_options($label, $tip, $detailedTip, $otherCoders),
          $options
      );

      $html = '<div class="control-group">';
      $html .= '<label class="control-label">' . $label . '</label>';
      $html .= '<div class="controls" style="padding-top:5px">';
      $html .= $this->Form->radio($field, $options['options'], $attributes);
      $html .= '</div>';
      $html .= '</div>';

      return $html;
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