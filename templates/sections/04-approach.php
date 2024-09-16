    <!-- 4 - Approach Section -->
    <section class="section-4 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][3]['href']); ?>" data-aos="fade-up" aria-labelledby="approach-title">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-8 ">
                    <h2 id="approach-title"><?php echo nl2br(html_entity_decode($config['pages']['home']['approach']['title'])); ?></h2>
                    <p class="text-left mb-0"><?php echo nl2br(html_entity_decode($config['pages']['home']['approach']['description'])); ?></p>
                </div>
                
            </div>

            <div class="offset-md-4 col-md-8 approach my-5" data-aos="fade-left">
            </div>

            <div class="row col-md-8">
                <?php foreach ($config['pages']['home']['approach']['points'] as $point): ?>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <i style="font-size:2rem;" class="mb-5 <?php echo $point['icon']; ?>"></i>
                            <h4 class="text-center fw-bold"><?php echo nl2br(html_entity_decode($point['title'])); ?></h4>
                            <p class="small-text text-center mb-0"><?php echo nl2br(html_entity_decode($point['description'])); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>