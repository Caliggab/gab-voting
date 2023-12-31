<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Gab Voting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans text-gray-900 text-sm bg-gray-background">
    <header class="flex items-center justify-between px-6 py-4">
        <a href="#">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="logo" width="180px">
        </a>
        <div class="flex items-center">
            <?php if(Route::has('login')): ?>
                <div class="p-6 text-right z-10">
                    <?php if(auth()->guard()->check()): ?>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>

                            <a href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <?php echo e(__('Log Out')); ?>

                            </a>
                        </form>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <a href="">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto flex max-w-custom">

        <div class="w-70 mr-5">Add idea formmm Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita tempore
            dolorem ea. Nesciunt, laborum distinctio. Hic voluptatibus ducimus, nemo nostrum saepe quod facere nisi!
            Distinctio mollitia nam laborum eum illo dolor cupiditate dignissimos aliquam ullam sunt. Quia, odio. A id
            illo voluptate molestiae accusantium asperiores ipsa numquam! Atque, eum repellat.s</div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering
                            (6)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                            Progress (1)</a></li>
                </ul>

                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented
                            (10)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed
                            (55)</a></li>
                </ul>
            </nav>

            <div class="mt-8">

                <?php echo e($slot); ?>

            </div>

        </div>


    </main>

</body>

</html>
<?php /**PATH /home/caliggab/Documents/Code/gab-voting/resources/views/layouts/app.blade.php ENDPATH**/ ?>