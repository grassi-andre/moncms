<?php
namespace MailPoetVendor\Twig\Node\Expression;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
use MailPoetVendor\Twig\Node\Node;
final class InlinePrint extends AbstractExpression
{
 public function __construct(Node $node, $lineno)
 {
 parent::__construct(['node' => $node], [], $lineno);
 }
 public function compile(Compiler $compiler)
 {
 $compiler->raw('print (')->subcompile($this->getNode('node'))->raw(')');
 }
}
