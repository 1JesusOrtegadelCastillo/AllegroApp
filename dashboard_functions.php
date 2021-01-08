<?php

include("db.php");

#AGENTS DASHBOARDS
## SALES ##

// Sales active agents
$sql = "SELECT COUNT(e_name) AS totalSalesActive
        FROM employee 
        WHERE employment_status = 'Active' 
        AND department = 'Sales'";
$resultSalesActive = mysqli_query($conn, $sql);
$countSalesActive = mysqli_fetch_assoc($resultSalesActive);


// Sales inactive agents
$sql = "SELECT COUNT(e_name) AS totalSalesInactive 
        FROM employee 
        WHERE employment_status = 'Inactive' 
        AND department = 'Sales'";
$resultSalesInactive = mysqli_query($conn, $sql);
$countSalesInactive = mysqli_fetch_assoc($resultSalesInactive);

// Sales total agents
$sql = "SELECT COUNT(e_name) AS totalSalesEmployees 
        FROM employee 
        WHERE department = 'Sales'";
$resultSalesTotal = mysqli_query($conn, $sql);
$countSalesTotal = mysqli_fetch_assoc($resultSalesTotal);


## CUSTOMER SERVICE ##

// CS active agents
$sql = "SELECT COUNT(e_name) AS totalCsActive 
        FROM employee WHERE employment_status='Active' 
        AND department = 'Customer Service'";
$resultCsActive = mysqli_query($conn, $sql);
$countCsActive = mysqli_fetch_assoc($resultCsActive);

// CS Inactive agents
$sql = "SELECT COUNT(e_name) AS totalCsInactive
        FROM employee 
        WHERE employment_status='Inactive' 
        AND department = 'Customer Service'";
$resultCsInactive = mysqli_query($conn, $sql);
$countCsInactive = mysqli_fetch_assoc($resultCsInactive);

// CS total agents
$sql = "SELECT COUNT(e_name) AS totalCsEmployees 
        FROM employee 
        WHERE department = 'Customer service'";
$resultCsTotal = mysqli_query($conn, $sql);
$countCsTotal = mysqli_fetch_assoc($resultCsTotal);


## TOTAL OF BOTH DEPARTMENTS (SALES AND CS)

//Total Sales and Customer Service ACTIVE agents
$sql = "SELECT COUNT(e_name) AS totalActiveAgents
        FROM employee 
        WHERE (department = 'Sales' OR department = 'Customer Service') 
        AND employment_status = 'Active'";
$resultTotalActive_Agents = mysqli_query($conn, $sql);
$countTotalActive_Agents = mysqli_fetch_assoc($resultTotalActive_Agents);

//Total Sales and Customer Service INACTIVE agents
$sql = "SELECT COUNT(e_name) AS totalInactiveAgents
        FROM employee 
        WHERE (department = 'Sales' 
        OR department = 'Customer Service') 
        AND employment_status = 'Inactive'";
$resultTotalInactive_Agents = mysqli_query($conn,$sql);
$countTotalInactive_Agents = mysqli_fetch_assoc($resultTotalInactive_Agents);

// Total Agents (active and inactive) im both departments (Sales and Customer S)
$sql = "SELECT COUNT(e_name) AS totalAgents
        FROM employee 
        WHERE (department = 'Sales' 
        OR department = 'Customer Service')";
$resultTotalAgents = mysqli_query($conn, $sql);
$countTotalAgents = mysqli_fetch_assoc($resultTotalAgents);


## ADMIN DASHBOARDS ##

// OPERATIONS 

// Operations Avtive employees
$sql = "SELECT COUNT(e_name) AS totalOpActive 
        FROM employee 
        WHERE employment_status = 'Active' 
        AND department = 'Operations'";
$resultOpActive = mysqli_query($conn, $sql);
$countOpActive = mysqli_fetch_assoc($resultOpActive);

// Operations Inavtive employees
$sql = "SELECT COUNT(e_name) AS totalOpInactive 
        FROM employee 
        WHERE employment_status = 'Inactive' 
        AND department = 'Operations'";
$resultOpInactive = mysqli_query($conn, $sql);
$countOpInactive = mysqli_fetch_assoc($resultOpInactive);

//Operations total employees
$sql = "SELECT COUNT(e_name) AS totalOpEmployees 
        FROM employee 
        WHERE department = 'Operations'";
$resultOpTotal = mysqli_query($conn, $sql);
$countOpTotal = mysqli_fetch_assoc($resultOpTotal);


// IT

// IT Active employees
$sql = "SELECT COUNT(e_name) AS totalITActive 
        FROM employee
        WHERE employment_status = 'Active' 
        AND department = 'IT'";
$resultITActive = mysqli_query($conn, $sql);
$countITActive = mysqli_fetch_assoc($resultITActive);

// IT Inactive employees
$sql = "SELECT COUNT(e_name) AS totalITInactive 
        FROM employee
        WHERE employment_status = 'Inactive' 
        AND department = 'IT'";
$resultITInactive = mysqli_query($conn, $sql);
$countITInactive = mysqli_fetch_assoc($resultITInactive);

//IT total employees
$sql = "SELECT COUNT(e_name) AS totalITEmployees 
        FROM employee 
        WHERE department = 'IT'";
$resultITTotal = mysqli_query($conn, $sql);
$countITTotal = mysqli_fetch_assoc($resultITTotal);

## TOTAL OF ADMIN DEPARTMENTS (IT AND OPERATIONS) ##

//Total IT and Operations ACTIVE employees
$sql = "SELECT COUNT(e_name) AS totalActiveAdmin
        FROM employee 
        WHERE (department = 'IT' OR department = 'Operations') 
        AND employment_status = 'Active'";
$resultTotalActive_Admin = mysqli_query($conn, $sql);
$countTotalActive_Admin = mysqli_fetch_assoc($resultTotalActive_Admin);

//Total Sales and Customer Service INACTIVE agents
$sql = "SELECT COUNT(e_name) AS totalInactiveAdmin
        FROM employee 
        WHERE (department = 'IT' 
        OR department = 'Operations') 
        AND employment_status = 'Inactive'";
$resultTotalInactive_Admin = mysqli_query($conn,$sql);
$countTotalInactive_Admin = mysqli_fetch_assoc($resultTotalInactive_Admin);

// Total Agents (active and inactive) im both departments (Sales and Customer S)
$sql = "SELECT COUNT(e_name) AS totalAdmin
        FROM employee 
        WHERE (department = 'IT' 
        OR department = 'Operations')";
$resultTotalAdmin = mysqli_query($conn, $sql);
$countTotalAdmin = mysqli_fetch_assoc($resultTotalAdmin);

?>

