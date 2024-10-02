<h1>Sections by Course</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      <th>Semester</th>
      <th>Room</th>
      <th>Day/ Time</th>
      </tr> 
    </thead>
    <tBody>      
<?php
while ($section = $sections->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $course['course_id']; ?></td>
    <td><?php echo $course['course_number']; ?></td>
    <td><?php echo $course['course_description']; ?></td>
    <td><?php echo $course['course_description']; ?></td>
    <td><?php echo $course['course_description']; ?></td>
    <td><?php echo $course['course_description']; ?></td>
  </tr>
<?php
}
?>
    </tBody>
  </table>
</div>
