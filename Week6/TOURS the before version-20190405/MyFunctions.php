<?php

//*********************************************************

function getCustomers($db)
 {
	$sql = "select * from customer order by surname" ;
    //  execute the sql query
    $result = $db->query($sql);  
    return $result ;
}

//*********************************************************
function getTours ($db)
{

	$sql = "select * from Tour order by tourName" ;
    $result = $db->query($sql);  
    return $result ;
}

//*********************************************************
function getBookings ($db)
{
    
    $sql = "select * from Booking order by month,tourCode,deposit" ;
    $result = $db->query($sql);  
    return $result;
}

/*
   PART (a) OF QUESTION 3 GOES HERE
*/

/*
**************************************************************************
*	getBookings2 function
*
*	used to find bookings for a given tourCode and/or surname or part surname
*
**************************************************************************
*/






/*
PART (b) OF QUESTION 4 GOES HERE
*/

/*
**************************************************************************
*	searchTours function
*
*	used to find tours that contain the given words in the tourName or introduction
*
**************************************************************************
*/











