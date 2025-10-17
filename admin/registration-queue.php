<?php include '../includes/header.php'; ?>

<body id="bs-background">
    <!-- title at logo natin sa queuing website -->
    <header class="fixed top-0 w-full z-50 flex justify-between items-center bg-white">
        <div class="navbar shadow-sm">
            <div class="navbar-start gap-2">
                <img src="../images/logo-queue.png" alt="Queue Logo" class="img-thumbnail border-0" id="queue-logo" width="50" height="50" />
                <h1 class="text-left text-2xl font-semibold mb-0">Queuing Management System</h1>

            </div>

            <div class="navbar-end gap-2">

                <butto id="backButton" class="btn btn-primary">
                    Back
                </butto>

            </div>
        </div>
    </header>


    <main class="w-full h-full overflow-y-auto">

        <div class="bg-slate-800 absolute left-0 w-[30%] h-full py-58">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img src="../images//logo-queue.png" alt="Your Company" class="mx-auto h-20 w-auto" />
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in to your account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="#" method="POST" class="">
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-100">Users</label>
                        <div class="mt-2">
                            <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-100 mt-4">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>

                    <div class="py-8">
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
                    </div>
                </form>


            </div>

        </div>

        <div class="absolute right-0 w-[70%] h-full bg-white flex items-center justify-center">
            <img src="../images/bg-background.jpg" alt="" class="max-w-full h-auto w-7xl" />
        </div>





    </main>


    <footer>

    </footer>


</body>

<?php include '../includes/footer.php'; ?>