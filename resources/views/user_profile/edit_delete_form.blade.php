<div id="addPostInput" class="hidden pt-20">
    <div class="flex pt-2 md:ml-60">
        <i class="fa fa-arrow-left pt-[3px] ml-3 md:ml-0" onclick="cancelButton()"></i>
        <span class="text-sm ml-1 hover:text-pink_red hover:underline decoration-light_blue hover:cursor-pointer" onclick="cancelButton()"> DASHBOARD</span>
    </div>
    <div class="pt-10 ml-3 md:ml-60"><span class="text=lg tb:text-xl">Add a story</span></div>
    <div class="md:pt-10 md:ml-60 absolute">
        <form enctype="multipart/form-data" action="addPost" method="POST" id="addPostForm">
            @csrf
            <div class="md:flex">
                <div>
                    <div class="pb-2">
                        <label class="pb-2 pt-10 ml-3 md:ml-0 md:pt-0">Blog Category</label>
                    </div>
                    <div>
                        <select id="categoryToAdd" name="category" class="rounded-md border-[1px] dark:bg-card_dark
                        border-gray-500 ml-3 md:ml-0 w-11/12 lt:w-[1173px] md:w-[754px] h-10 text-base" required>
                            <option value="" selected>Choose a category</option>
                            <option value="Business blog">Business blog</option>
                            <option value="DIY craft blog">DIY craft blog</option>
                            <option value="Fashion and beauty blog">Fashion and beauty blog</option>
                            <option value="Food blog">Food blog</option>
                            <option value="Health and fitness blog">Health and fitness blog</option>
                            <option value="Lifestyle blog">Lifestyle blog</option>
                            <option value="Movie blog">Movie blog</option>
                            <option value="Music blog">Music blog</option>
                            <option value="News blog">News blog</option>
                            <option value="Photography blog">Photography blog</option>
                            <option value="Political blog">Political blog</option> 
                            <option value="Sports blog">Sports blog</option>
                            <option value="Travel blog">Travel blog</option>
                            <option value="Other Blog">Others</option>
                        </select>
                    </div>
                    <div class="pt-6 ml-3 md:ml-0 pb-2"><span>Your Title</span></div>
                    <div><input type="text" id="titleToAdd" name="title" placeholder="Title" class="rounded-md border-[1px] dark:bg-card_dark
                         border-gray-500 ml-3 md:ml-0 w-11/12 lt:w-[1173px] md:w-[754px] h-10 text-lg" required></div>
                    <div class="pt-6 ml-3 md:ml-0"><span>Your Blog Content</span></div>
                    <div class="pt-2"><textarea id="contentToAdd" name="content" placeholder="Content" rows="10" 
                        class="ml-3 md:ml-0 resize-y rounded-md border-[1px] border-gray-500 w-11/12 lt:w-[1173px] md:w-[755px] dark:bg-card_dark" required></textarea></div>
                    <div class="hidden md:flex">
                        <div class="pt-7 ml-3 md:ml-0"><input type="submit" name="submit" class="rounded-md text-whish dark:hover:text-whish bg-green-600 h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-green-600 transition-all duration-150"></div>
                        <div class="pt-7 md:pl-96 pl-36"><input onclick="cancelButton()" type="button" name="cancel" value="Cancel" class="rounded-md text-whish dark:hover:text-whish bg-red h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-red transition-all duration-150"></div>
                    </div>
                </div>

                <div class="md:ml-52">
                    <div class="pt-6 ml-3 md:ml-0"><span>Upload picture for your blog</span></div>
                    <div class="pt-2 ml-3 md:ml-0"><input type="file" name="picture" id="picture" accept="image/*" required onchange="previewImageAdd(event)"></div>
                    <img src="storage/pictures/insert_image.png" id="previewPicAdd" class="w-11/12 lt:w-96 md:pl-4 pt-5 mx-auto md:mx-0">
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

<div id="editPost" class="hidden pt-20">
    <div class="flex pt-2 md:ml-60">
        <i class="fa fa-arrow-left pt-[3px] ml-3 md:ml-0" onclick="cancelButtonEdit()"></i>
        <span class="text-sm ml-1 hover:text-pink_red hover:underline decoration-light_blue hover:cursor-pointer" onclick="cancelButtonEdit()"> DASHBOARD</span>
    </div>
    <div class="pt-10 ml-3 md:ml-60"><span class="text=lg tb:text-xl">Edit your post</span></div>
    <div class="md:pt-10 md:ml-60 absolute">
        <form enctype="multipart/form-data" action="editPost" method="POST" id="editPostForm">
            @csrf
            <input type="hidden" name="idEdit" id="idEdit">
            <div class="md:flex">
                <div>
                    <div class="pb-2">
                        <label class="pt-10 ml-3 md:ml-0 md:pt-0">Blog Category</label>
                    </div>
                    <select id="categoryToEdit" name="categoryToEdit" class="rounded-md border-[1px] dark:bg-card_dark
                        border-gray-500 ml-3 md:ml-0 w-11/12 lt:w-[1173px] md:w-[754px] h-10 text-base" required>
                            <option value="">Choose a category</option>
                            <option value="Business blog">Business blog</option>
                            <option value="DIY craft blog">DIY craft blog</option>
                            <option value="Fashion and beauty blog">Fashion and beauty blog</option>
                            <option value="Food blog">Food blog</option>
                            <option value="Health and fitness blog">Health and fitness blog</option>
                            <option value="Lifestyle blog">Lifestyle blog</option>
                            <option value="Movie blog">Movie blog</option>
                            <option value="Music blog">Music blog</option>
                            <option value="News blog">News blog</option>
                            <option value="Photography blog">Photography blog</option>
                            <option value="Political blog">Political blog</option> 
                            <option value="Sports blog">Sports blog</option>
                            <option value="Travel blog">Travel blog</option>
                            <option value="Other Blog">Others</option>
                    </select>
                    <div class="pb-2 pt-6 ml-3 md:ml-0"><span>Your Title</span></div>
                    <div><input type="text" id="titleToEdit" name="titleToEdit" placeholder="Title" class="rounded-md border-[1px] dark:bg-card_dark 
                    border-gray-500 ml-3 md:ml-0 w-11/12 md:w-[754px] h-10 text-lg" required></div>
                    <div class="pt-6 ml-3 md:ml-0"><span>Your Blog Content</span></div>
                    <div class="pt-2"><textarea id="contentToEdit" name="contentToEdit" placeholder="Content" rows="10" 
                    class="ml-3 md:ml-0 resize-y rounded-md border-[1px] border-gray-500 w-11/12 md:w-[755px] dark:bg-card_dark" required></textarea></div>

                    <div class="hidden md:flex">
                        <div class="pt-7 ml-3 md:ml-0"><input type="submit" name="submit" class="rounded-md text-whish dark:hover:text-whish bg-green-600 h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-green-600 transition-all duration-150"></div>
                        <div class="pt-7 md:pl-96 pl-36"><input onclick="cancelButtonEdit()" type="button" name="cancel" value="Cancel" class="rounded-md text-whish dark:hover:text-whish bg-red h-[40px] w-[100px] hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-red transition-all duration-150"></div>
                    </div>
                </div>
                
                <div class="md:ml-52">
                    <div class=""><span>Upload picture for your blog</span></div>
                    <input type="file" name="pictureToEdit" id="pictureToEdit" class="cursor-pointer pt-2 ml-3 md:ml-0" accept="image/*" onchange="previewImageEdit(event)">
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