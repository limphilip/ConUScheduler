<?php
/**
 * Created by PhpStorm.
 * User: Dimitri
 * Date: 3/28/2016
 * Time: 1:02 AM
 */
$this->menu=array(
    array('label' => 'Schedule Planner', 'url'=>array('index')
    ),
    array('label'=>'My Saved Schedules', 'url'=>array('ViewSaved')
    ),
    array('label' => 'My Course Sequence', 'url'=>array('CourseSequence')
    )
);
$this->breadcrumbs=array(
    'Scheduler',
    'My Course Sequence',
);

$sequence[1]["fall"][] = "COMP 248";
$sequence[1]["fall"][] = "COMP 232";
$sequence[1]["fall"][] = "ENGR 201";
$sequence[1]["fall"][] = "ENGR 213";


$sequence[1]["winter"][] = "SOEN 228";
$sequence[1]["winter"][] = "ENGR 233";
$sequence[1]["winter"][] = "SOEN 287";
$sequence[1]["winter"][] = "COMP 249";


$sequence[2]["fall"][] = "COMP 348";
$sequence[2]["fall"][] = "COMP 352";
$sequence[2]["fall"][] = "ENCS 282";
$sequence[2]["fall"][] = "ENGR 202";

$sequence[2]["winter"][] = "COMP 346";
$sequence[2]["winter"][] = "ELEC 275";
$sequence[2]["winter"][] = "ENGR 371";
$sequence[2]["winter"][] = "SOEN 331";
$sequence[2]["winter"][] = "SOEN 341";


$sequence[3]["fall"][] = "COMP 335";
$sequence[3]["fall"][] = "SOEN 342";
$sequence[3]["fall"][] = "SOEN 343";
$sequence[3]["fall"][] = "SOEN 384";
$sequence[3]["fall"][] = "ENGR 391";

$sequence[3]["winter"][] = "SOEN 344";
$sequence[3]["winter"][] = "SOEN 345";
$sequence[3]["winter"][] = "SOEN 357";
$sequence[3]["winter"][] = "SOEN 390";


$sequence[4]["fall"][] = "SOEN 490";
$sequence[4]["fall"][] = "ENGR 301";
$sequence[4]["fall"][] = "SOEN 321";


$sequence[4]["winter"][] = "SOEN 385";
$sequence[4]["winter"][] = "ENGR 392";
$sequence[4]["winter"][] = "SOEN 490";

Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerCssFile(
    Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');


?>

<div id="tabs">
    <ul>
        <?php foreach(array(1,2,3,4) as $year)
        {?>
            <li><a href='#tabs-<?php echo $year; ?>'><h1>Year <?php echo $year; ?></h1></a></li>
            <?php
        }
        ?>
    </ul>
<?php
foreach($sequence as $year => $semester)
{
    ?>
    <div id="tabs-<?php echo $year; ?>">
    <table>

        <?php foreach($semester as $name => $courses)
        {?>

            <thead>
                <th colspan="3"><h3><?php echo ucfirst($name);?></h3></th>

            </thead>

            <thead>
            <th>Course Number</th>
            <th>Course Name</th>
            <th>Credit</th>
            </thead>
            <tbody>
            <?php
            foreach($courses as $courseName)
            { ?>
               <tr>
                   <td><?php echo $courseName;?></td>
                   <td></td>
                   <td></td>

               </tr>

           <?php }
            ?>

            </tbody>

        <?php
        }
        ?>

    </table>
    </div>
    <?php
}
?>
</div>
<script>
    $(function(){
        $( "#tabs" ).tabs(); // create tabs
    });
</script>
