<div id="addPostInput" class="hidden">
    <div class="md:pt-14 md:ml-60"><span class="text-2xl">Add a story</span></div>
    <div class="md:pt-10 md:ml-60 absolute">
        <form enctype="multipart/form-data" action="addPost" method="POST" id="addPostForm">
            @csrf
            <div class="md:flex">
                <div>
                    <div class="pb-2 pt-10 ml-3 md:ml-0 md:pt-0"><span>Your Title</span></div>
                    <div><input type="text" id="titleToAdd" name="title" placeholder="Title" class="rounded-md border-[1px] dark:bg-red
                         border-gray-500 ml-3 md:ml-0 w-11/12 md:w-[754px] h-10 text-lg" required></div>
                    <div class="pt-6 ml-3 md:ml-0"><span>Your Blog Content</span></div>
                    <div class="pt-2"><textarea id="contentToAdd" name="content" placeholder="Content" rows="10" 
                        class="ml-3 md:ml-0 resize-y rounded-md border-[1px] border-gray-500 w-11/12 md:w-[755px] dark:bg-red" required></textarea></div>
                    <div class="hidden md:flex">
                        <div class="pt-7 ml-3 md:ml-0"><input type="submit" name="submit" class="rounded-md text-whish dark:hover:text-whish bg-green-600 h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-green-600 transition-all duration-150"></div>
                        <div class="pt-7 md:pl-96 pl-36"><input onclick="cancelButton()" type="button" name="cancel" value="Cancel" class="rounded-md text-whish dark:hover:text-whish bg-red h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-red transition-all duration-150"></div>
                    </div>
                </div>

                <div class="md:ml-52">
                    <div class="pt-6 ml-3 md:ml-0"><span>Upload picture for your blog</span></div>
                    <div class="pt-2 ml-3 md:ml-0"><input type="file" name="picture" id="picture" required onchange="previewImageAdd(event)"></div>
                    <img src="storage/pictures/insert_image.png" id="previewPicAdd" class="w-11/12 md:w-96 md:pl-4 pt-5 mx-auto md:mx-0">
                </div>
            </div>

            <div class="md:hidden flex">
                <div class="pt-7 ml-3 md:ml-0"><input type="submit" name="submit" class="rounded-md text-whish dark:hover:text-whish bg-green-600 h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-green-600 transition-all duration-150"></div>
                <div class="pt-7 md:pl-96 pl-36"><input onclick="cancelButton()" type="button" name="cancel" value="Cancel" class="rounded-md text-whish dark:hover:text-whish bg-red h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-red transition-all duration-150"></div>
            </div>
        
        </form>
    </div>
</div>

@yield('addForm')

<div id="editPost" class="hidden">
    <div class="md:pt-14 md:ml-60"><span class="text-2xl">Edit your post</span></div>
    <div class="md:pt-10 md:ml-60 absolute">
        <form enctype="multipart/form-data" action="editPost" method="POST" id="editPostForm">
            @csrf
            <input type="hidden" name="idEdit" id="idEdit">
            <div class="md:flex">
                <div>
                    <div class="pb-2 pt-10 ml-3 md:ml-0 md:pt-0"><span>Your Title</span></div>
                    <div><input type="text" id="titleToEdit" name="titleToEdit" placeholder="Title" class="rounded-md border-[1px] dark:bg-red 
                    border-gray-500 ml-3 md:ml-0 w-11/12 md:w-[754px] h-10 text-lg" required></div>
                    <div class="pt-6 ml-3 md:ml-0"><span>Your Blog Content</span></div>
                    <div class="pt-2"><textarea id="contentToEdit" name="contentToEdit" placeholder="Content" rows="10" 
                    class="ml-3 md:ml-0 resize-y rounded-md border-[1px] border-gray-500 w-11/12 md:w-[755px] dark:bg-red" required></textarea></div>

                    <div class="hidden md:flex">
                        <div class="pt-7 ml-3 md:ml-0"><input type="submit" name="submit" class="rounded-md text-whish dark:hover:text-whish bg-green-600 h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-green-600 transition-all duration-150"></div>
                        <div class="pt-7 md:pl-96 pl-36"><input onclick="cancelButtonEdit()" type="button" name="cancel" value="Cancel" class="rounded-md text-whish dark:hover:text-whish bg-red h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-red transition-all duration-150"></div>
                    </div>
                </div>
                
                <div class="md:ml-52">
                    <div class=""><span>Upload picture for your blog</span></div>
                    <input type="file" name="pictureToEdit" id="pictureToEdit" class="cursor-pointer pt-2 ml-3 md:ml-0" onchange="previewImageEdit(event)">
                    <img src="" id="previewPicEdit" id="picturePicEdit" class="w-11/12 md:w-96 md:pl-4 pt-5 mx-auto md:mx-0">
                    <input type="hidden" id="origPic" name="origPic" class="w-96 pl-4">
                </div>
            </div>

            <div class="md:hidden flex">
                <div class="pt-7 ml-3 md:ml-0"><input type="submit" name="submit" class="rounded-md text-whish dark:hover:text-whish bg-green-600 h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-green-600 transition-all duration-150"></div>
                <div class="pt-7 md:pl-96 pl-36"><input onclick="cancelButtonEdit()" type="button" name="cancel" value="Cancel" class="rounded-md text-whish dark:hover:text-whish bg-red h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-red transition-all duration-150"></div>
            </div>
        
        </form>
    </div>
</div>

@yield('editForm')