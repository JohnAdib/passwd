<?php foreach ($myExplorerTree as $key => $item) { ?>
    <div class="flex items-center bg-indigo-500 rounded-md p-3 text-white cursor-pointer transition duration-500 ease-in-out hover:shadow hover:bg-indigo-600 mb-3">
        <div>
            <svg fill="currentColor" class="w-10 h-10" style="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 4c0-1.1.9-2 2-2h7l2 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"></path></svg>

        </div>

        <div class="px-3 mr-auto">

            <h4 class="font-bold"><?php
if(isset($item['text']))
{
    echo $item['text'];
}
else
{
    echo $item['id'];
}
            ?></h4>
            <small class="text-xs">Lorem ipsum dolor sit amet,...</small>
        </div>
    </div>
<?php } ?>
</div>
