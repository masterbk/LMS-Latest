<?php

class __Mustache_19332d69549bba24d5e18ad73dbac4de extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template-inline')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'blockDcfe85aa8b71b6692807a1fd6007e27e'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section636f31b573a492101292f14b05e76e46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{separator}}}
            {{{html}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('separator'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockDcfe85aa8b71b6692807a1fd6007e27e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <span class="fdate_selector d-flex align-items-center">
';
        $value = $context->findDot('element.elements');
        $buffer .= $this->section636f31b573a492101292f14b05e76e46($context, $indent, $value);
        $buffer .= $indent . '        </span>
';
    
        return $buffer;
    }
}
