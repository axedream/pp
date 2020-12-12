<aside class="main-sidebar">

    <section class="sidebar">


        <?php
            $user = ($this->contect->user && $this->context->user->isAdmin) ? ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/user/index']] : [];
        ?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Чат', 'icon' => 'heart', 'url' => ['/chat']],
                    $user,
                ],
            ]
        ) ?>

    </section>

</aside>
