<?php include '../includes/header.php'; ?>
<?php include_once '../database/config.php'; ?>

<body id="bs-background">
    <header class="fixed top-0 w-full z-50 flex justify-between items-center bg-white">
        <div class="navbar shadow-sm">
            <div class="navbar-start gap-2">
                <img src="../images/logo-queue.png" alt="Queue Logo" class="img-thumbnail border-0" id="queue-logo" width="50" height="50" />
                <h1 class="text-left text-2xl font-semibold mb-0">Queuing Management System</h1>

            </div>

            <div class="navbar-end gap-2">

                <butto id="backButton" class="btn btn-primary">
                    Home
                </butto>

            </div>
        </div>
    </header>

    <main class="w-full h-full overflow-y-auto">

        <div class="bg-slate-800 absolute right-0 w-[40%] h-full py-58">

            <div class="mt-10 flex justify-center items-center w-full">
                <form action="#" method="POST" class=" w-full max-w-xl">

                    <div>
                        <label for="email" class="block text-sm/6 font-semibold text-gray-100">Client Name</label>
                        <div class="mt-2">
                            <input id="text" type="user" name="user" required autocomplete="user" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>


                    <div class="w-full mt-4">
                        <label for="transaction_id" class="block text-sm font-semibold text-gray-100 mb-2">Transaction Types</label>
                        <div class="relative">
                            <select name="transaction_id" id="transaction_id" required
                                class="block w-full appearance-none rounded-md bg-white/10 px-3 py-2 pr-10 text-sm font-semibold text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
                                <option value="" disabled selected>Please select here</option>
                                <?php
                                $transaction = $connection->query("SELECT * FROM transaction_types WHERE transaction_status = 1 ORDER BY id ASC");
                                while ($row = $transaction->fetch_assoc()):
                                ?>
                                    <option class="text-black" value="<?php echo $row['id'] ?>"><?php echo $row['transaction_name'] ?></option>
                                <?php endwhile; ?>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <i class="bi bi-arrow-down text-white"></i>
                            </div>
                        </div>
                    </div>



                    <div class="py-8">
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                    </div>
                </form>


            </div>

        </div>

        <div class="absolute left-0 w-[60%] h-full bg-white flex items-center justify-center">
            <img src="../images/bg-serving.jpg" alt="" class="w-screen h-screen" />
        </div>

    </main>


    <footer>

    </footer>


</body>

<?php include '../includes/footer.php'; ?>