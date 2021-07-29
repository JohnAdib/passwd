<div class="grid grid-cols-3 gap-4">
 <div id="jstree_explorer" data-json='<?php echo json_encode($myExplorerTree) ?>'></div>
 <div class="col-span-2">

<?php foreach ($myExplorerTree as $key => $item) { ?>
    <a class="flex items-center bg-indigo-500 rounded-md p-3 text-white cursor-pointer transition duration-500 ease-in-out hover:shadow hover:bg-indigo-600 mb-3" href="<?php if(isset($item['url'])) { echo $item['url'];}?>">
        <div>
<?php if(isset($item['type']) && $item['type'] === 'folder') {?>
            <svg fill="currentColor" class="w-10 h-10" style="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 4c0-1.1.9-2 2-2h7l2 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"></path></svg>
<?php } else {?>
            <svg fill="currentColor" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 367.6 367.6"><path d="M328.6 81.6c-.4 0-.4-.4-.8-.8s-.4-.8-.8-1.2L258.2 2.4c-.4-.4-1.2-.8-1.6-1.2-.4 0-.4-.4-.8-.4-.8-.4-2-.8-3.2-.8H83.8C59 0 38.6 20.4 38.6 45.2v277.2c0 24.8 20.4 45.2 45.2 45.2h200c24.8 0 45.2-20.4 45.2-45.2v-238c0-.8-.4-2-.4-2.8zm-68.4-54.4l44.4 50h-44.4v-50zM313.8 322c0 16.8-13.2 30.4-30 30.4h-200c-16.8 0-30-13.6-30-30V44.8c0-16.8 13.6-30 30-30H245v69.6c0 4 3.2 7.6 7.6 7.6h61.2v230z"/><path d="M92.6 92h66.8c4 0 7.6-3.2 7.6-7.6s-3.2-7.6-7.6-7.6H92.6c-4 0-7.6 3.2-7.6 7.6s3.6 7.6 7.6 7.6zM159.4 275.6H92.6c-4 0-7.6 3.2-7.6 7.6 0 4 3.2 7.6 7.6 7.6h66.8c4 0 7.6-3.2 7.6-7.6 0-4-3.6-7.6-7.6-7.6zM85 134.8c0 4 3.2 7.6 7.6 7.6H271c4 0 7.6-3.2 7.6-7.6 0-4-3.2-7.6-7.6-7.6H92.6c-4 0-7.6 3.2-7.6 7.6zM271 164.8H92.6c-4 0-7.6 3.2-7.6 7.6 0 4 3.2 7.6 7.6 7.6H271c4 0 7.6-3.2 7.6-7.6 0-4.4-3.2-7.6-7.6-7.6zM271 202H92.6c-4 0-7.6 3.2-7.6 7.6 0 4 3.2 7.6 7.6 7.6H271c4 0 7.6-3.2 7.6-7.6 0-4.4-3.2-7.6-7.6-7.6zM271 239.2H92.6c-4 0-7.6 3.2-7.6 7.6 0 4 3.2 7.6 7.6 7.6H271c4 0 7.6-3.2 7.6-7.6 0-4-3.2-7.6-7.6-7.6z"/></svg>
<?php }?>
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
            <small class="text-xs"><?php
if(isset($item['type']) && $item['type'] === 'folder')
{
    echo "Lorem ipsum dolor sit amet,...";

}
else
{
}
             ?></small>
        </div>
    </a>
<?php } ?>
 </div>

