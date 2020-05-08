<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Standard Php Library</title>
  </head>
  <body>
<h1>SplDoublyLinkedList</h1>
<p>A SplDoublyLinkedList and its output with different data structure approach</p>
<?php
//FIFO and LIFO in SplDoublyLinkedList

$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');
$list->push('d');
$list->push('X');

// valid():bool  Checks if the doubly linked list contains any more nodes.
// rewind():void  This rewinds the iterator to the beginning.
// next():void  Move the iterator to the next node.
// current():mixed Get the current doubly linked list node.
echo "This SplDoublyLinkedList has: " . $list->count() ." elements<br>";
echo "FIFO (First In First Out) :<br>";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo $list->current()."<br>";
}
echo "LIFO (Last In First Out) :<br>";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo $list->current()."<br>";
}
?>
  </body>
</html>
