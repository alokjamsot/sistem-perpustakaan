<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section class="p-2 h-screen w-full flex justify-center items-center">
        <div class="flex w-1/2 h-fit rounded-md overflow-hidden shadow-sm shadow-slate-300">
            <img src="./images/luffy.jpg" alt="luffy">
            <div class="p-10 w-full">
                <form method="post">
                    <h1 class="text-4xl text-blue-700 mb-8">Register</h1>
                    <label for="username">Username</label> <br>
                    <input type="text" name="username" id="username" class="my-2 border-[1px] border-slate-300 p-2 outline-none w-full rounded-md focus:border-blue-700"> <br>
                    <label for="register_gmail">Gmail</label> <br>
                    <input type="text" name="register_gmail" id="register_gmail" class="my-2 border-[1px] border-slate-300 p-2 outline-none w-full rounded-md focus:border-blue-700"> <br>
                    <label for="register_password">Password</label> <br>
                    <input type="password" name="register_password" id="register_password" class="my-2 border-[1px] border-slate-300 p-2 outline-none w-full rounded-md focus:border-blue-700"> <br>
                    <label for="confirm_password">Confirm Password</label> <br>
                    <input type="password" name="confirm_password" id="confirm_password" class="my-2 border-[1px] border-slate-300 p-2 outline-none w-full rounded-md focus:border-blue-700"> <br>
                    <button type="submit" name="login" value="login" class="text-white bg-blue-700 my-4 p-2 w-full rounded-md">Register</button>
                    <p class="text-center">Already have an account? <a href="./login.php" class="text-blue-700">Login</a></p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>