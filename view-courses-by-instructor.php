<h1>Courses By Instructor</h1>
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
while ($course = $courses->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $course['course_ID']; ?></td>
    <td><?php echo $course['course_number']; ?></td>
    <td><?php echo $course['course_description']; ?></td>
    <td><?php echo $course['semester']; ?></td>
    <td><?php echo $course['room']; ?></td>
    <td><?php echo $course['day_time']; ?></td>
  </tr>
<?php
}
?>
    </tBody>
  </table>
</div>
