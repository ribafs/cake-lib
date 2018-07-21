## Plugin with your functions to database access in CakePHP 3

# Dizendo não para o lado negro da força (MS) mudei para o GitLab. Manterei os arquivos aqui em respeito aos usuários e ao antigo GitHub mas estarei atualizando somente no GitLab daqui pra frente.
https://gitlab.com/ribafs/cake-lib

[![Licença](https://img.shields.io/packagist/l/doctrine/orm.svg?maxAge=2592000)](https://github.com/ribafs/cake-lib-table/blob/master/LICENSE)
[![Último Estável](https://img.shields.io/packagist/v/elboletaire/twbs-cake-plugin.svg?style=flat-square)](https://packagist.org/packages/ribafs/cake-lib-table)

# How to use

**In CustomersController**
```php
namespace App\Controller;
use App\Controller\AppController;

require_once(ROOT.DS.'vendor'.DS.'ribafs'.DS.'cake-lib'.DS.'src'.DS.'RibafsCake'.DS.'RibafsCake.php');
use RibafsCake\RibafsCake;

class CustomersController extends AppController
{
	public function index(){
		$rfs = new RibafsCake();		
		$regs = $rfs->allRegs('Customers');
		$this->set('all',$regs);		
	}
}
```

**In Template/Customers/index.ctp**

```php
print '<table border="1">';
print '<tr><td><b>ID</td><td><b>Name</td><td><b>E-mail</td><td><b>Birtday</td><tr>';
foreach ($all as $customer){
	print '<tr>';
	print '<td>'.$customer->id.'</td>';
	print '<td>'.$customer->nome.'</td>';
	print '<td>'.$customer->email.'</td>';
	print '<td>'.$customer->birtday.'</td>';
	print '</tr>';	
}
print '</table>';
```

**Anothers functions**
```php
    // Return only one register
    oneReg($modelName)

    // Return the total registers from table
    countRegs($modelName)

    // Return all register but only 3 fields
    allRegsFields($modelName, $fields=array())    // Ex: ['id', 'nome', 'email']
```

**Add your own functions to enhance the lirary,**

## Suggestions, colaborations and forks are very wellcome:

- Errors in my english
- PHP
- CakePHP
- others

License
-------

The MIT License (MIT)

