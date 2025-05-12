<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-[#1F143D]">
        <div class="container mx-auto max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl bg-[#0C0020] p-6 sm:p-8">
            <h2 class="text-white text-2xl sm:text-3xl text-center">Sign up</h2>
            <form class="p-4 sm:p-8" method="POST" action="signup_process.php">
                <div class="mb-4">
                    <h4 class="text-base sm:text-lg text-white">Email</h4>
                    <input 
                        name="email"
                        placeholder="Enter your email" 
                        type="email" 
                        class="w-full bg-[#0C0020] p-2 rounded-md border border-gray-300 text-white mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        required 
                    />
                </div>
                <div class="mb-4">
                    <h4 class="text-base sm:text-lg text-white">Password</h4>
                    <input 
                        name="password"
                        placeholder="Enter your password" 
                        type="password" 
                        class="w-full bg-[#0C0020] p-2 rounded-md border border-gray-300 text-white mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        required 
                    />
                    <h6 class="text-white text-sm mt-2 text-end">Forget your password?</h6>
                </div>
                <div class="mb-4">
                    <h4 class="text-base sm:text-lg text-white">Confirm password</h4>
                    <input 
                        name="confirm_password"
                        placeholder="Enter your password" 
                        type="password" 
                        class="w-full bg-[#0C0020] p-2 rounded-md border border-gray-300 text-white mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        required 
                    />
                </div>
                <button 
                    type="submit" 
                    class="w-full p-2 mt-4 bg-blue-500 text-white hover:bg-blue-600 rounded-md"
                >
                    Sign Up
                </button>
                <h6 class="text-white text-sm mt-4 text-center">
                    Already have an account 
                    <a href="SignIn.php" class="text-[#FFC439] hover:underline">Sign In</a>
                </h6>
            </form>
        </div>
    </div>
</body>
</html>