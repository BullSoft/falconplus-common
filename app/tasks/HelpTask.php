<?php

namespace PhalconPlus\DevTools\Tasks;

class HelpTask extends \Phalcon\CLI\Task
{
    private $c;

    public function initialize()
    {
        $this->c = 1;
    }

    public function mainAction()
    {
        $this->cli->br()->info("Phalcon+ 命令行工具 (Ver. 1.0.0)");
        $this->cli->br()->out("命令使用方式：");
        $this->cli->info("  <white>...:APP_ROOT$</white> ./common/bin/fp-devtool command arg1 arg2 arg3");
        $this->cli->br()->out('<yellow>可用命令如下: </yellow>');

        $data = [
            [
                "command" => '<light_green>module create</light_green>',
                "args" => "-",
                'description' => "引导创建Phalcon+模块",
                'alias' => "create-module",
            ],
            [
                "command" => '<light_green>module list</light_green>',
                "args" => '-',
                'description' => "Phalcon+模块列表",
                'alias' => "module",
            ],
            [
                "command" => '<light_green>server start</light_green>',
                "args" => 'arg1: $moduleName, arg2: $listenPort',
                'description' => "使用PHP内置服务器运行Phalcon+模块",
                'alias' => "-",
            ],
            [
                "command" => '<light_green>server stop</light_green>',
                "args" => 'arg1: $moduleName',
                'description' => "关闭Phalcon+模块服务器",
                'alias' => "-",
            ],
            [
                "command" => '<light_green>server list</light_green>',
                "args" => '-',
                'description' => "Phalcon+模块服务器列表",
                'alias' => "-",
            ],

            [
                "command" => '<light_green>create-model</light_green>',
                "args" => '-',
                'description' => "引导创建Phalcon+ORM模型",
                'alias' => "-",
            ],
            [
                "command" => '<light_green>create-exception</light_green>',
                "args" => '-',
                'description' => "引导创建Phalcon+异常",
                'alias' => "-",
            ],
            [
                "command" => '<light_green>help</light_green>',
                "args" => '-',
                'description' => "查看Phalcon+命令行工具帮助文档",
                'alias' => "-",
            ],

        ];

        $this->cli->table($data);

    }
}