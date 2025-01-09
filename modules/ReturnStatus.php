<?php
function PriorityLevels($Priority)
{
    if ($Priority == "HIGH") {
        $return = '<span class="btn btn-xs btn-warning high">HIGH</span>';
    } elseif ($Priority == "NORMAL") {
        $return = '<span class="btn btn-xs btn-primary normal">NORMAL</span>';
    } elseif ($Priority == "LOW") {
        $return = '<span class="btn btn-xs btn-info low">LOW</span>';
    } elseif ($Priority == "URGENT") {
        $return = '<span class="btn btn-xs btn-danger blink-data urgent">URGENT</span>';
    } else {
        $return = '<span class="btn btn-xs btn-secondary normal">DEFAULT</span>';
    }
    return $return;
}


//enquiry statys
function RecordStatus($Status)
{
    if ($Status == "" || $Status == "FRESH") {
        $return = '<span class="pull-right btn btn-xs btn-primary mr-1">FRESH</span>';
    } elseif ($Status == "INPROCESS") {
        $return = '<span class="pull-right btn btn-xs btn-warning mr-1">In Process</span>';
    } elseif ($Status == "CLOSED_LOST") {
        $return = '<span class="pull-right btn btn-xs btn-danger mr-1">LOST</span>';
    } elseif ($Status == "CLOSED_WON") {
        $return = '<span class="pull-right btn btn-xs btn-success mr-1">WON</span>';
    } else {
        $return = '<span class="pull-right btn btn-xs btn-secondary mr-1">OTHERS</span>';
    }
    return $return;
}
