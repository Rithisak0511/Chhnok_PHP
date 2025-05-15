<?php session_start(); ?>

<?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
    <div class="mb-4 text-red-500 bg-white/10 rounded-md p-4">
        <ul>
            <?php foreach ($_SESSION['errors'] as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <style>
        body {
            background-image: url("img/background3.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body class="bg-center flex justify-center items-center p-4 text-white">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center items-center mb-6">
            <img src="img/Logo.png" alt="logo">
        </div>

        <!-- Card -->
        <div class="bg-[#281e46]/60 backdrop-blur-md rounded-lg border border-white/10 p-8">
            <h1 class="text-center text-2xl font-bold mb-8 font-play">Sign up</h1>

            <form method="POST" action="UserAccount.php">
                <!-- Firstname Field -->
                <div class="mb-6">
                    <label for="firstname" class="block text-lg mb-2">Firstname</label>
                    <div class="relative">
                        <input
                            type="text"
                            id="firstname"
                            placeholder="Enter your firstname"
                            class="w-full py-3 bg-transparent border-b border-white/50 text-white placeholder-white/70 focus:outline-none"
                            name="firstname"
                            required
                        >
                    </div>
                </div>

                <!-- Lastname Field -->
                <div class="mb-6">
                    <label for="lastname" class="block text-lg mb-2">Lastname</label>
                    <div class="relative">
                        <input
                            type="text"
                            id="lastname"
                            placeholder="Enter your lastname"
                            class="w-full py-3 bg-transparent border-b border-white/50 text-white placeholder-white/70 focus:outline-none"
                            name="lastname"
                            required
                        >
                    </div>
                </div>

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-lg mb-2">Email</label>
                    <div class="relative">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            class="w-full py-3 bg-transparent border-b border-white/50 text-white placeholder-white/70 focus:outline-none"
                            required
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-mail text-white absolute right-2 top-1/2 transform -translate-y-1/2"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                            <path d="M3 7l9 6l9 -6" />
                        </svg>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="mb-8">
                    <label for="password" class="block text-lg mb-2">Password</label>
                    <div class="relative">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            class="w-full py-3 bg-transparent border-b border-white/50 text-white placeholder-white/70 focus:outline-none"
                            required
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-lock text-white absolute right-2 top-1/2 transform -translate-y-1/2"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                        </svg>
                    </div>
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-8">
                    <label for="confirmpassword" class="block text-lg mb-2">Confirm password</label>
                    <div class="relative">
                        <input
                            type="password"
                            id="confirmpassword"
                            name="confirmpassword"
                            placeholder="Confirm your password"
                            class="w-full py-3 bg-transparent border-b border-white/50 text-white placeholder-white/70 focus:outline-none"
                            required
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-lock text-white absolute right-2 top-1/2 transform -translate-y-1/2"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                        </svg>
                    </div>
                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    class="w-full bg-loginBtn text-white font-bold py-4 px-4 rounded-md mb-4 flex justify-center items-center bg-[#00B67A]"
                    name="signup"
                    value="signup"
                >
                    Sign up
                </button>

                <!-- Sign Up Link -->
                <div class="text-center mt-6">
                    Already have an account
                    <a href="Signin.php" class="text-googleBtn font-bold">Sign in</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

