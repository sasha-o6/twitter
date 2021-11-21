<?php if ($posts) { ?>
    <!-- <pre><?= var_dump($posts); ?></pre> -->
    <section class="wrapper">
        <ul class="tweet-list">
            <?php foreach ($posts as $post) { ?>
                <li>
                    <pre><?= var_dump($post)  ?></pre>
                    <article class="tweet">
                        <div class="row">
                            <img class="avatar" src="<?= get_url($post["avatar"]); ?>" alt="Аватар пользователя <?= $post["name"]; ?>">
                            <div class="tweet__wrapper">
                                <header class="tweet__header">
                                    <h3 class="tweet-author"><?= $post["name"]; ?>
                                        <a href="<?= get_url('user_posts.php?id=' . $post["id"]); ?>" class="tweet-author__add tweet-author__nickname">@<?= $post["login"]; ?></a>
                                        <time class="tweet-author__add tweet__date"><?= date("d.m.Y в H:I", strtotime($post["date"]) ); ?></time>
                                    </h3>
                                    <button class="tweet__delete-button chest-icon"></button>
                                </header>
                                <div class="tweet-post">
                                    <p class="tweet-post__text">Сообщение Марии Lorem ipsum dolor sit amet, consectetur.</p>
                                    <?php if(isset($post["image"])) { ?>
                                    <figure class="tweet-post__image">
                                        <img src="<?= $post["image"]; ?>" alt="tweet image"> 
                                    </figure>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <footer>
                            <button class="tweet__like">0</button>
                            <!-- tweet__like_active -->
                        </footer>
                    </article>
                </li>
            <?php } ?>
        </ul>
    </section>

<?php } else {
    echo "Postov nety";
} ?>