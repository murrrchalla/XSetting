<?php
namespace Orchids\XSetting\Http\Layouts;

use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Field;
use Orchid\Screen\Fields\Builder;

class XSettingEditLayout extends Rows
{
    /**
     * Views
     *
     * @return array
     */
	public function fields(): array
    {
      //dd($this->query->getContent('xsetting'));


        return [
            Field::tag('input')
                ->name('xsetting.key')
                ->required()
                ->max(255)
                ->title('Key slug'),
            Field::tag('input')
                ->name('xsetting.options.title')
                ->required()
                ->max(255)
                ->title('Title'),
            Field::tag('textarea')
                ->name('xsetting.options.desc')
                ->row(5)
                ->title('Description'),
            Field::tag('textarea')
                ->name('xsetting.value')
                ->title('Value'),
        ];

/*
		$fields = [
			'key'		=> Field::tag('input')
                ->name('xsetting.key')
                ->required()
				->max(255)
                ->title('Key slug'),
		
			'title'		=> Field::tag('input')
                ->name('xsetting.options.title')
                ->required()
				->max(255)
                ->title('Title'),
			
			'desc'	=> Field::tag('textarea')
                ->name('xsetting.options.desc')
				->row(5)
                ->title('Description'),
				
			'type' => Field::tag('select')
                ->options([
                    'input'    => 'Input',
                    'textarea' => 'Textarea',
                    'picture'  => 'Picture',
                    'code'     => 'CodeEditor (JSON)',
                    'codejs'   => 'CodeEditor (JavaScript)',
                    'tags'     => 'Tags',
                ])
                ->name('xsetting.options.type')
                ->title('Type'),	
        ];

		//dd(json_encode($this->query->getContent('xsetting.value.value')));
		
		//$type=$this->query->getContent('xsetting.options.type') ?? 'input';
        if (!is_null($this->query->getContent('xsetting.options.type'))) {
            $type = $this->query->getContent('xsetting.options.type');
        } elseif (is_array($this->query->getContent('xsetting.value'))) {
            $type = 'code';
        } else {
            $type = 'input';
        }

		switch ($type) {
		
			case 'picture':
				$fields['width'] = Field::tag('input')
                         ->name('xsetting.value.width')
                         ->title('Picture width');
				$fields['height'] = Field::tag('input')
                         ->name('xsetting.value.height')
                         ->title('Picture height');
				$fields['value'] = Field::tag('picture')
						 ->name('xsetting.value.value')
						 ->width($this->query->getContent('xsetting.value.width') ?? 500)
						 ->height($this->query->getContent('xsetting.value.height') ?? 300);
				break;
            case 'code':    
                $fields['value'] = Field::tag($type)
				 ->name('xsetting.value')
                 ->language('json')
                 ->title('Value code');
                 break;
            case 'codejs':    
                $fields['value'] = Field::tag('code')
				 ->name('xsetting.value')
                 ->language('js')
                 ->title('Value code');
                 break;                 
			default:
				$fields['value'] = Field::tag($type)
				 ->name('xsetting.value')
                 //->modifyValue(json_encode($this->query->getContent('xsetting.value')))
                 //->modifyName('xsetting.value')
                 //->modifyValue('Hello')
                 //->value('hello')
				 ->title('Value');
		}
//dd($fields);
		return $fields;
*/
    }
	
	
	
	
	 /**
     * @param $post
     *
     * @return array
     * @throws \Throwable
     */
     /*
    public function build($post)
    {
        //dd($post);
		$form = new Builder($this->dfields($post), $post);

        return view($this->template, [
            'form' => $form->generateForm(),
        ])->render();
    }*/
	
}