<?php if ($posts) { ?>
    <section class="wrapper">
        <ul class="tweet-list">
            <?php foreach ($posts as $post) { ?>
                <li>
                    <pre><?= var_dump($post)  ?></pre>
                    <article class="tweet">
                        <div class="row">
                            <img class="avatar" src="images/mary.jpg" alt="Аватар пользователя Мария">
                            <div class="tweet__wrapper">
                                <header class="tweet__header">
                                    <h3 class="tweet-author"><?= $post["name"]; ?>
                                        <a href="#" class="tweet-author__add tweet-author__nickname">@<?= $post["login"]; ?></a>
                                        <time class="tweet-author__add tweet__date">11 января</time>
                                    </h3>
                                    <button class="tweet__delete-button chest-icon"></button>
                                </header>
                                <div class="tweet-post">
                                    <p class="tweet-post__text">Сообщение Марии Lorem ipsum dolor sit amet, consectetur.</p>
                                    <figure class="tweet-post__image">
                                        <img src="https://picsum.photos/400/300?random=1" alt="Сообщение Марии Lorem ipsum dolor sit amet, consectetur.">
                                    </figure>
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