<nav class="navbar navbar-expand-lg navbar-dark fixed-top px-5">
    <div class="row col-md-10 mx-auto justify-content-between justify-content-lg-start">
        <a class="navbar-brand" href="?page=home">
            <img src="./images/<?php echo htmlspecialchars($config['site']['logo']); ?>" alt="Logo"
                style="height: 100px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php foreach ($config['navigation'] as $navItem): ?>
                    <li class="nav-item">
                        <a aria-label="Lien vers vers <?php echo htmlspecialchars($navItem['label']); ?>" class="nav-link <?= isset($navItem['class']) ? htmlspecialchars($navItem['class']) : ""; ?>"
                            href="<?php echo htmlspecialchars($navItem['href']); ?>">
                            <?php echo htmlspecialchars($navItem['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <!-- Menu déroulant pour changer de langue -->
                <li class="nav-item dropdown">
                    <a aria-label="<?php echo htmlspecialchars($config['languages_title_aria']); ?>" class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i style="font-size:1rem" class="fas fa-globe"></i>
                        <?php echo htmlspecialchars($config['languages_title']); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                        <?php foreach ($config['languages'] as $language): ?>
                            <a class="text-dark dropdown-item" href="?lang=<?php echo htmlspecialchars($language['code']); ?>">
                                <img src="./images/languages/<?php echo htmlspecialchars($language['flag']); ?>"
                                    alt="<?php echo htmlspecialchars($language['name']); ?>"
                                    style="width: 20px; height: 20px;">
                                <?php echo htmlspecialchars($language['name']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>