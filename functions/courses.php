<?php
// Set the timezone to the desired timezone
date_default_timezone_set('America/New_York');

// Set the cron schedule to run at 3:00 AM every day
$cron_schedule = '0 3 * * *';

// Get the current time in the desired timezone
$current_time = new DateTime('now', new DateTimeZone('America/New_York'));

// Get the next run time for the cron job
$next_run_time = new DateTime($cron_schedule);
$next_run_time->setTimezone(new DateTimeZone('America/New_York'));
while ($next_run_time < $current_time) {
    $next_run_time->modify('+1 day');
}

// Calculate the number of seconds until the next run time
$interval = $next_run_time->getTimestamp() - $current_time->getTimestamp();

// Schedule the cron job
sleep($interval);
$course = new Course();
$course->lp_create_ethos_posts();
$course->lp_prune_ethos_post();