<div>Third Year | First Semester</div>
  <table class="tbl ">
    <thead>
      <th width="20%">COURSE CODE</th>
      <th width="50%">COURSE TITLE</th>
      <th width="10%">UNITS</th>
      <th width="15%">PRE-REQ.</th>
      <th width="5%">RATING</th>
    </thead>
    <tbody> 
      <?php 
          $level = "Third Year";
          $semester ="First";
          $sql ="SELECT * FROM `studentsubjects` st,`subject` s WHERE st.`SUBJ_ID`=s.`SUBJ_ID` AND IDNO='" . $stud->IDNO."' AND LEVEL='{$level}' AND st.SEMESTER='{$semester}'";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();
          foreach ($cur as $row) {
            # code... 
            echo '<tr>';
            echo '<td>'.$row->SUBJ_CODE.'</td>';
            echo '<td>'.$row->SUBJ_DESCRIPTION.'</td>';
            echo '<td>'.$row->UNIT.'</td>';
            echo '<td>'.$row->PRE_REQUISITE.'</td>';
            echo '<td>'.$row->AVERAGE.'</td>';
            echo '</tr>';
          }

      ?>
    </tbody>
  </table>
<div>Third Year | Second Semester</div>
  <table class="tbl ">
    <thead>
      <th width="20%">COURSE CODE</th>
      <th width="50%">COURSE TITLE</th>
      <th width="10%">UNITS</th>
      <th width="15%">PRE-REQ.</th>
      <th width="5%">RATING</th>
    </thead>
    <tbody> 
      <?php 
          $level = "Third Year";
          $semester ="Second";
          $sql ="SELECT * FROM `studentsubjects` st,`subject` s WHERE st.`SUBJ_ID`=s.`SUBJ_ID` AND IDNO='" . $stud->IDNO."' AND LEVEL='{$level}' AND st.SEMESTER='{$semester}'";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();
          foreach ($cur as $row) {
            # code... 
            echo '<tr>';
            echo '<td>'.$row->SUBJ_CODE.'</td>';
            echo '<td>'.$row->SUBJ_DESCRIPTION.'</td>';
            echo '<td>'.$row->UNIT.'</td>';
            echo '<td>'.$row->PRE_REQUISITE.'</td>';
            echo '<td>'.$row->AVERAGE.'</td>';
            echo '</tr>';
          }

      ?>
    </tbody>
  </table>