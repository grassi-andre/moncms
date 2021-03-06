<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Events_CommandEvent extends Swift_Events_EventObject
{
 private $command;
 private $successCodes = [];
 public function __construct(Swift_Transport $source, $command, $successCodes = [])
 {
 parent::__construct($source);
 $this->command = $command;
 $this->successCodes = $successCodes;
 }
 public function getCommand()
 {
 return $this->command;
 }
 public function getSuccessCodes()
 {
 return $this->successCodes;
 }
}
