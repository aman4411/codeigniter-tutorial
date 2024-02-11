<?= $this->extend('layouts/default') ?>
<?php $this->section('title')?> Students <?php $this->endSection() ?>
<?php $this->section('content')?> 

<div class="row">
    <div class="col">
        <h1>Students List</h1>
    </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Roll Number</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($students as $student): ?>
        <tr>
            <td><?= $student['rollNumber'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['class'] ?></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php 

?>
<?php $this->endSection() ?>