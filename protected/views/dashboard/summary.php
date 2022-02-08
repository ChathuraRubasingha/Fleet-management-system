<div>
  <div class="container-fluid xyz  col-lg-7">
    <div class="hedder">
      <h1>Vehicle Overview</h1>
    </div>
    <div class="table-content">
      <?php
      $q = "SELECT
              ma_vehicle_category.Category_Name,
              Count(ma_vehicle_registry.Vehicle_No) as count1
              FROM
              ma_vehicle_registry
              INNER JOIN ma_vehicle_category ON ma_vehicle_registry.Vehicle_Category_ID = ma_vehicle_category.Vehicle_Category_ID
              INNER JOIN vehicle_transfer ON ma_vehicle_registry.Vehicle_No = vehicle_transfer.Vehicle_No
              INNER JOIN ma_vehicle_status ON ma_vehicle_registry.Vehicle_Status_ID = ma_vehicle_status.Vehicle_Status_ID
              WHERE
              vehicle_transfer.To_Date < CURDATE() AND
              ma_vehicle_registry.Vehicle_Status_ID = 1
              GROUP BY
              ma_vehicle_category.Category_Name";
      $r = "SELECT
              Count(ma_vehicle_registry.Vehicle_No) as count2
              FROM
              ma_vehicle_registry
              INNER JOIN ma_vehicle_category ON ma_vehicle_registry.Vehicle_Category_ID = ma_vehicle_category.Vehicle_Category_ID
              INNER JOIN vehicle_transfer ON ma_vehicle_registry.Vehicle_No = vehicle_transfer.Vehicle_No
              INNER JOIN ma_vehicle_status ON ma_vehicle_registry.Vehicle_Status_ID = ma_vehicle_status.Vehicle_Status_ID
              WHERE
              vehicle_transfer.To_Date < CURDATE() AND
              ma_vehicle_registry.Vehicle_Status_ID = 1
              GROUP BY
              ma_vehicle_category.Category_Name";
      $s = "SELECT
              Count(ma_vehicle_registry.Vehicle_No) as count2
              FROM
              ma_vehicle_registry
              INNER JOIN ma_vehicle_category ON ma_vehicle_registry.Vehicle_Category_ID = ma_vehicle_category.Vehicle_Category_ID
              INNER JOIN vehicle_transfer ON ma_vehicle_registry.Vehicle_No = vehicle_transfer.Vehicle_No
              INNER JOIN ma_vehicle_status ON ma_vehicle_registry.Vehicle_Status_ID = ma_vehicle_status.Vehicle_Status_ID
              WHERE
              vehicle_transfer.To_Date < CURDATE() AND
              ma_vehicle_registry.Vehicle_Status_ID = 1
              GROUP BY
              ma_vehicle_category.Category_Name";
      $arr = Yii::app()->db->createCommand($q)->queryAll();
      $arr2 = Yii::app()->db->createCommand($r)->queryAll();
      $arr3 = Yii::app()->db->createCommand($s)->queryAll();
      $tbl =  "<table class='table table-striped'><thead><tr><th scope= 'col' class='catogory'>Catogory</th><th scope= 'col' class='allocated'>Allocated</th><th scope= 'col' class='idle'>Idle</th><th scope= 'col' class='accident'>Accident</th></tr></thead>";
      for ($i = 0; $i < sizeof($arr); $i++) {
        $tbl .= "<tr><th scope='row'>" . $arr[$i]['Category_Name'] . "</th><td>" . $arr[$i]['count1'] . "</td>";
        //$tbl .= "<tr><td>$No</td><td>" . $val['Material_ID'] . "</td><td>" . $val['Material_Name'] . "</td><td style = 'text-align: center'>" . $val['Unit_Code'] . "</td><td style = 'text-align: center'>" . $val ['Qty'] . "</td><td></td></tr>";
        for ($j = $i; $j <= $i; $j++) {
          $tbl .= "<td>" . $arr2[$j]['count2'] . "</td>";
          //$tbl .= "<tr><td>$No</td><td>" . $val['Material_ID'] . "</td><td>" . $val['Material_Name'] . "</td><td style = 'text-align: center'>" . $val['Unit_Code'] . "</td><td style = 'text-align: center'>" . $val ['Qty'] . "</td><td></td></tr>";
          for ($j = $i; $j <= $i; $j++) {
            $tbl .= "<td>" . $arr3[$j]['count2'] . "</td></tr>";
            //$tbl .= "<tr><td>$No</td><td>" . $val['Material_ID'] . "</td><td>" . $val['Material_Name'] . "</td><td style = 'text-align: center'>" . $val['Unit_Code'] . "</td><td style = 'text-align: center'>" . $val ['Qty'] . "</td><td></td></tr>";
          }
        }
      }
      $tbl .= "</table>";
      echo $tbl;
      ?>
    </div>
  </div>
  <div class="chart_container col-lg-5">
    <?php $this->renderPartial('//dashboard/charts', array()); ?>
  </div>

  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $("#menu-toggle-2").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled-2");
      $('#menu ul').hide();
    });

    function initMenu() {
      $('#menu ul').hide();
      $('#menu ul').children('.current').parent().show();
      //$('#menu ul:first').show();
      $('#menu li a').click(
        function() {
          var checkElement = $(this).next();
          if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            return false;
          }
          if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#menu ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
            return false;
          }
        }
      );
    }
    $(document).ready(function() {
      initMenu();
    });
  </script>
</div>
<div class="col-xs-3" style="width: 100%; float: left; padding-top:100px">
  <?php $this->renderPartial('//dashboard/_index_bk', array()); ?>
</div>