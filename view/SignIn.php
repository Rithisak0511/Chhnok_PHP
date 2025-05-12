<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-[#1F143D]">
    <div class='container mx-auto max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl bg-[#0C0020] p-6 sm:p-8'>
        <h2 class='text-white text-2xl sm:text-3xl text-center'>Sign in</h2>
        <form class='p-4 sm:p-8'>
            <div class='mb-4'>
                <h4 class='text-base sm:text-lg text-white'>Email</h4>
                <input 
                    placeholder='Enter your email' 
                    type='email' 
                    class='w-full bg-[#0C0020] p-2 rounded-md border border-gray-300 text-white mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500' 
                    required 
                />
            </div>
            <div class='mb-4'>
                <h4 class='text-base sm:text-lg text-white'>Password</h4>
                <input 
                    placeholder='Enter your password' 
                    type='password' 
                    class='w-full bg-[#0C0020] p-2 rounded-md border border-gray-300 text-white mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500' 
                    required 
                />
                <h6 class='text-white text-sm mt-2 text-end'>Forget your password?</h6>
            </div>
            <button 
                type='submit' 
                class='w-full p-2 mt-4 bg-blue-500 text-white hover:bg-blue-600 rounded-md'
            >
                Sign In
            </button>
            <h6 class='text-white text-sm mt-4 text-center'>
                Don't have an account? 
                <a href='SignUp.php' class='text-[#FFC439] hover:underline'>Register</a>
            </h6>
        </form>
    </div>
</body>
</html>