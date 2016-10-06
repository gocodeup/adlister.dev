

<script   src="http://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

<script language='javascript' type='text/javascript'>
    
    //signup verification for matching passwords
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
    
    //display table for pokemon table
</script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
<script>
    //initialize jquery datatable
  $('#pkmnTable').DataTable();
      //add click listeners to each row
    $('#pkmnTable').on("click", function() {
        addListeners();
    }); 
  </script>

<script>

    //add click listeners to each row
    function addListeners() {
        $('#pkmnTable tbody tr').off();
        $('#pkmnTable tbody tr').on("click", function() {
            var clickedRow = ($(this).text());
            //remove all but pokemon name from string
            clickedText = clickedRow.replace(/[0-9]/g, '');
            insertText = $.trim(clickedText);
            //insert text from cliked row into input fields above
            $('.insert-pokemon').each(function() {
                if (!$(this).val()) {
                    $(this).val(insertText);
                    return false;
                }
            });
        });
    };

    addListeners();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.0/Chart.bundle.min.js">
</script>
<script>
<?php if (isset($_POST['TEAM_ID'])) : ?>
  <?php $colorsArray = [
  "rgba(255,99,132,0.2)",
  "rgba(255,99,132,1)",
  "rgba(159,227,120,1)",
  "rgba(46,93,19,1)",
  "rgba(121,127,246,1)",
  "rgba(13,22,201,1)",
  "rgba(235,235,5,1)",
  "rgba(252,245,115,1)",
  "rgba(235,148,235,1)",
  "rgba(167,32,167,1)",
  "rgba(251,160,112,1)",
  "rgba(213,79,7,1)"
  ];
  $counter = 0; 
  ?>
      var ctx = $('#full-team-compare').get(0).getContext("2d");
  ctx.canvas.height = 250;
  var data = {
    labels: ["HP", "Attack", "Defense", "Special Attack", "Special Defense", "Speed"],
    datasets: [
      
    <?php $incrementer = 0; foreach ($memberNames as $member) : ?>
      <?php $data = []; foreach ($stats[$incrementer] as $name => $stat) : ?>
        <?php $data[] = $stat; ?>
      <?php endforeach;  $incrementer++;?>
          {
          label: "<?= $member ?>",
          backgroundColor:  "<?php echo $colorsArray[$counter]; $counter++ ?>",
          borderColor: "<?php echo $colorsArray[$counter]; $counter++ ?>",
          pointBackgroundColor: "#fff",
          pointBorderColor: "#fff",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(255,99,132,1)",
          data: <?= json_encode($data) ?>
      },
      <?php endforeach; ?>
      ]
    };
  new Chart(ctx, {
    type: "radar",
    data: data,
    options: {
            scale: {  
                reverse: false,
                ticks: {
                    beginAtZero: true
                }
            }
      }
  });
  <?php endif; ?>
  <?php if (isset($leftPokemon)) : ?>
    var ctx = $('#stats-chart').get(0).getContext("2d");
    ctx.canvas.height = 300;
    var data = {
      labels: ["HP", "Attack", "Defense", "Special Attack", "Special Defense", "Speed"],
      datasets: [
              {
              label: "<?= $leftName ?>",
              backgroundColor: "rgba(255,99,132,0.2)",
              borderColor: "rgba(255,99,132,1)",
              pointBackgroundColor: "rgba(255,99,132,1)",
              pointBorderColor: "#fff",
              pointHoverBackgroundColor: "#fff",
              pointHoverBorderColor: "rgba(255,99,132,1)",
              data: <?= json_encode($leftPokemon) ?>
          },
          {
              label: "<?= $rightName ?>",
              backgroundColor: "rgba(179,181,198,0.2)",
              borderColor: "rgba(179,181,198,1)",
              pointBackgroundColor: "rgba(179,181,198,1)",
              pointBorderColor: "#fff",
              pointHoverBackgroundColor: "#fff",
              pointHoverBorderColor: "rgba(179,181,198,1)",
              data: <?= json_encode($rightPokemon) ?>
          }
      ]
    };
    new Chart(ctx, {
      type: "radar",
      data: data,
      options: {
              scale: {
                  reverse: false,
                  ticks: {
                      beginAtZero: true
                  }
              }
        }
    });
<?php endif; ?>
</script>
