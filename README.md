# Olive Template
OliveWeb templating engine

## Installation
Add to your OliveWeb installation under modules/template. (The path to template.mod.php should be `modules/template/template.mod.php`)

## Usage
1. Load the template module: `$modules = Modules::getInstance(); $modules['template'];`
2. Load your template into a template instance: `$template = new Template('path/to/template/file.tpl');`
3. Assign variables: `$template->assign('myVar', 'Hello World'); $template->assign('oceanIsBlue', true);`
4. Assign arrays to loop through: `$template->assign('people', [['name' => 'Alice'], ['name' => 'Bob']]);`
5. In your template file, show a variable: `{myVar}`
6. Loop through an array: `People: {LOOP:people} {name} {ENDLOOP}`
7. Use an IF/ELSE conditional: `{IF:oceanIsBlue} Ocean is Blue {ELSE} Ocean is Green {ENDIF}`
8. Echo directly: `$template->display();` or output to a string: `$output = $template->display(true);`

## Security
Specially crafted template files can be used to execute arbitrary PHP code.  
Treat your template files' permissions with the same care as your PHP files.

## License
Olive Template is under the MIT license.  
Includes template.class.php from [TinyPHPHelperClasses](https://github.com/chefe/TinyPHPHelperClasses) (GPLv2 License)
