<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>

<body class="">
    <?php
    include ('Header.php')
        ?>
    <main class="relative w-full py-20 ">
        <h1 class="text-6xl mb-10 font-semibold text-center">Layanan Kami</h1>
        <section class="flex relative w-full flex-wrap justify-center mx-auto gap-16">

            <div class="w-64 bg-black h-72 group  relative"
                style="background-image:url(https://source.unsplash.com/random/600×720/?drug); background-size: cover;">
                <div
                    class="h-full px-2 w-full bg-black flex justify-center items-center group bg-opacity-0 duration-300 ease-in-out hover:bg-opacity-50">
                    <h3
                        class="group-hover:opacity-100 opacity-0 duration-300 ease-in-out text-3xl text-center font-semibold text-[#D6DAF7]">
                        Konsultasi Medis Online</h3>
                </div>
                <div
                    class="size-full group-hover:-bottom-3 bottom-0 right-0 duration-300 ease-in-out group-hover:-right-3 bg-[#007b8E] absolute  -z-10">

                </div>
            </div>
            <div class="w-64 bg-black h-72 group  relative"
                style="background-image: url(https://source.unsplash.com/random/600×720/?doctor); background-size: cover">
                <div
                    class="h-full px-2 w-full bg-black flex justify-center items-center group bg-opacity-0 duration-300 ease-in-out hover:bg-opacity-50">
                    <h3
                        class="group-hover:opacity-100 opacity-0 duration-300 ease-in-out text-3xl text-center font-semibold text-[#D6DAF7]">
                        Terapi Kesehatan Mental</h3>
                </div>
                <div
                    class="size-full group-hover:-bottom-3 bottom-0 right-0 duration-300 ease-in-out group-hover:-right-3 bg-[#007b8E] absolute  -z-10">

                </div>

            </div>
            <div class="w-64 bg-black h-72 group  relative"
                style="background-image: url(https://source.unsplash.com/random/600×720/?nurse); background-size: cover">
                <div
                    class="h-full px-2 w-full bg-black flex justify-center items-center group bg-opacity-0 duration-300 ease-in-out hover:bg-opacity-50">
                    <h3
                        class="group-hover:opacity-100 opacity-0 duration-300 ease-in-out text-3xl text-center font-semibold text-[#D6DAF7]">
                        Edukasi Kesehatan</h3>
                </div>
                <div
                    class="size-full group-hover:-bottom-3 bottom-0 right-0 duration-300 ease-in-out group-hover:-right-3 bg-[#007b8E] absolute  -z-10">

                </div>

            </div>
        </section>
    </main>
    <div id="toggle" class="size-12 fixed  bottom-10 right-10 rounded-full bg-[#ECD7CD]">

    </div>
    <div id="chatbox" class="lg:w-[40vw] w-[70vw] hidden h-80 fixed flex gap-5 flex-col right-24 bottom-10 bg-[#ECD7CD] p-5">
        <div class="h-[95%] bg-white w-full overflow-y-auto" id="chat-content">
           

        </div>
        <form action="" method="post" >
            <input type="text" placeholder="Chat here...." name="message" class="input input-bordered w-full max-w-xs"
                id="messageInput" />
            <button type="submit" class="btn bg-[#007b8E]">Kirim</button>
        </form>

    </div>
    
    <?php
    include ('Footer.php')
        ?>




<script src="chat.js"></script>
<script src="script.js"></script>

</body>

</html>

</body>

</html>