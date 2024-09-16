<style>

    .fact-count {
        border-radius: 1rem;
    }


</style>


<?php
function extract_number($html)
{
    // Extraire uniquement le nombre à l'intérieur de la balise <span>
    preg_match('/<span>([\d\+]+)/', $html, $matches);
    return isset($matches[1]) ? intval($matches[1]) : 0;
}

function replace_number_with_placeholder($html)
{
    // Remplacer le contenu de la balise <span> avec une balise <span> avec le nombre animé
    return preg_replace_callback('/<span>([\d\+]+)<\/span>/', function ($matches) {
        $number = $matches[1];
        return '<span class="count" data-target="' . $number . '">' . $number . '</span>';
    }, $html);
}
?>

<section id="presentation" class="row py-5 justify-content-center">

    <div class="col-md-8">
        <!-- Section Header -->
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="section-title">
                <?= htmlspecialchars($config['presentation_title']); ?>
            </h2>
        </div>

        <!-- First Row: Experience and Introduction -->
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-4 mb-3 mb-md-0">
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="counters">
                        <div class="facts-item">
                            <div class="fact-count bg-icon p-2">
                                <!-- Remplacer le contenu avec le nombre animé -->
                                <?= replace_number_with_placeholder(html_entity_decode($config['presentation'][0]['key_number'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8" data-aos="fade-left">
                <p><?= $config['presentation'][0]['text']; ?></p>
            </div>
            <div class="col-lg-4 col-md-12 p-0 my-3 my-md-0" data-aos="fade-right">
                <img src="images/<?= htmlspecialchars($config['presentation_img']); ?>" class="img-fluid rounded"
                    alt="<?= htmlspecialchars($config['presentation_alt']); ?>">
            </div>
        </div>

        <!-- Second Row: Services and Client Satisfaction -->
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8" data-aos="fade-left">
                <p><?= $config['presentation'][1]['text']; ?></p>
            </div>
            <div class="col-lg-2 col-md-4 mb-3 mb-md-0">
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="counters">
                        <div class="facts-item">
                            <div class="fact-count bg-icon p-2">
                                <!-- Remplacer le contenu avec le nombre animé -->
                                <?= replace_number_with_placeholder(html_entity_decode($config['presentation'][1]['key_number'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>