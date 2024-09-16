<?php

echo '<section class="container py-5" id="' . $config['form']['section_id'] . '">';
echo '<div class="text-center mb-4" data-aos="fade-up">';
echo '<h2 class="section-title">' . $config['form']['title'] . '</h2>';
echo '</div>';

echo '<form action="' . $config['form']['action'] . '" method="' . $config['form']['method'] . '" data-aos="fade-left">';

// Parcourir les inputs et générer les éléments HTML
foreach ($config['form']['inputs'] as $input) {
    echo '<div class="' . $input['wrapper_class'] . '" data-aos="fade-' . $input['data_aos']['fade'] . '" data-aos-delay="' . $input['data_aos']['delay'] . '">';
    echo '<label for="' . $input['id'] . '">' . $input['label'] . '</label>';
    
    if ($input['type'] === 'select') {
        echo '<select class="' . $input['class'] . '" id="' . $input['id'] . '" name="' . $input['name'] . '" required="' . ($input['required'] ? 'required' : '') . '">';
        foreach ($input['options'] as $option) {
            echo '<option value="' . $option['value'] . '" ' 
                . (isset($option['disabled']) && $option['disabled'] ? 'disabled' : '') 
                . (isset($option['selected']) && $option['selected'] ? 'selected' : '') 
                . '>' . $option['text'] . '</option>';
        }
        echo '</select>';
    } elseif ($input['type'] === 'textarea') {
        echo '<textarea class="' . $input['class'] . '" id="' . $input['id'] . '" name="' . $input['name'] . '" rows="' . $input['rows'] . '" placeholder="' . $input['placeholder'] . '" required="' . ($input['required'] ? 'required' : '') . '"></textarea>';
    } else {
        echo '<input type="' . $input['type'] . '" class="' . $input['class'] . '" id="' . $input['id'] . '" name="' . $input['name'] . '" placeholder="' . $input['placeholder'] . '" required="' . ($input['required'] ? 'required' : '') . '">';
    }
    echo '</div>';
}

// Générer le bouton de soumission
$submitButton = $config['form']['submit_button'];
echo '<button type="submit" class="' . $submitButton['class'] . '" data-aos="fade-' . $submitButton['data_aos']['fade'] . '" data-aos-delay="' . $submitButton['data_aos']['delay'] . '">';
echo $submitButton['text'];
echo '</button>';

echo '</form>';
echo '</section>';
?>
