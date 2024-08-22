<?php

class __Mustache_30ed203fde085c92090ab41fd96d8080 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' d-inline-block">
';
        $buffer .= $indent . '    <form method="';
        $value = $this->resolveValue($context->find('method'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-inline" id="';
        $value = $this->resolveValue($context->find('formid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('params');
        $buffer .= $this->section60a14ae5ab6931499cdaf64f3e4f6699($context, $indent, $value);
        $value = $context->find('label');
        $buffer .= $this->section44ddc5ddf7ad6662ad821b1c70628013($context, $indent, $value);
        $value = $context->find('helpicon');
        $buffer .= $this->sectionDb0f025ed3e747d086a6ad4bf2205a7a($context, $indent, $value);
        $buffer .= $indent . '        <select ';
        $value = $context->find('attributes');
        $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
        $buffer .= ' id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="custom-select ';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                ';
        $value = $context->find('title');
        $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('disabled');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('options');
        $buffer .= $this->section253b2ed8acd5ca436a89ca25d6c940f7($context, $indent, $value);
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        <noscript>
';
        $buffer .= $indent . '            <input type="submit" class="btn btn-secondary ml-1" value="';
        $value = $context->find('str');
        $buffer .= $this->section9b3ccc5f65ed9245b5297e3d7e55569b($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        </noscript>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionD03776f605a33c0c0805423f486a1634($context, $indent, $value);

        return $buffer;
    }

    private function section60a14ae5ab6931499cdaf64f3e4f6699(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input type="hidden" name="{{name}}" value="{{value}}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd20463c348991d5bbd2fb97358ea7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44ddc5ddf7ad6662ad821b1c70628013(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <label for="{{id}}"{{#labelattributes}} {{name}}="{{value}}"{{/labelattributes}}>
                {{{label}}}
            </label>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <label for="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('labelattributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </label>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb0f025ed3e747d086a6ad4bf2205a7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>core/help_icon}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6805fd502f1e55bd3a63b02c625bf221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb30325ba4e5065f061652102e745487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{.}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c4c73ea8dba5b55447082c641201ccd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <option value="{{value}}" {{#selected}}selected{{/selected}}>{{{name}}}</option>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23ae3a7694feb9fc66bd515258f38e59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <optgroup label="{{name}}">
                    {{#options}}
                    <option value="{{value}}" {{#selected}}selected{{/selected}}>{{{name}}}</option>
                    {{/options}}
                    </optgroup>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <optgroup label="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('options');
                $buffer .= $this->section4c4c73ea8dba5b55447082c641201ccd($context, $indent, $value);
                $buffer .= $indent . '                    </optgroup>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section253b2ed8acd5ca436a89ca25d6c940f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#optgroup}}
                    <optgroup label="{{name}}">
                    {{#options}}
                    <option value="{{value}}" {{#selected}}selected{{/selected}}>{{{name}}}</option>
                    {{/options}}
                    </optgroup>
                {{/optgroup}}
                {{^optgroup}}
                    <option {{ignore}} value="{{value}}" {{#selected}}selected{{/selected}}>{{{name}}}</option>
                {{/optgroup}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('optgroup');
                $buffer .= $this->section23ae3a7694feb9fc66bd515258f38e59($context, $indent, $value);
                $value = $context->find('optgroup');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <option ';
                    $value = $this->resolveValue($context->find('ignore'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= ' value="';
                    $value = $this->resolveValue($context->find('value'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" ';
                    $value = $context->find('selected');
                    $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</option>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b3ccc5f65ed9245b5297e3d7e55569b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'go, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'go, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD03776f605a33c0c0805423f486a1634(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core/custom_interaction_events\'], function($, CustomEvents) {
    CustomEvents.define(\'#{{id}}\', [CustomEvents.events.accessibleChange]);
    $(\'#{{id}}\').on(CustomEvents.events.accessibleChange, function() {
        var ignore = $(this).find(\':selected\').attr(\'data-ignore\');
        if (typeof ignore === typeof undefined) {
            $(\'#{{formid}}\').submit();
        }
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core/custom_interaction_events\'], function($, CustomEvents) {
';
                $buffer .= $indent . '    CustomEvents.define(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', [CustomEvents.events.accessibleChange]);
';
                $buffer .= $indent . '    $(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').on(CustomEvents.events.accessibleChange, function() {
';
                $buffer .= $indent . '        var ignore = $(this).find(\':selected\').attr(\'data-ignore\');
';
                $buffer .= $indent . '        if (typeof ignore === typeof undefined) {
';
                $buffer .= $indent . '            $(\'#';
                $value = $this->resolveValue($context->find('formid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').submit();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
