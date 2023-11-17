<?php

use Illuminate\Support\Facades\Process;

$__tinkerModeDefinedVars__ = get_defined_vars();

$_reload = function ($lineStart = null, $endLine = null) use ($__tinkerModeDefinedVars__) {

    $histFile = '.__tinkerMode__history.php'; //stores executable history

    $argsIsSet = ($lineStart !== null && $endLine !== null);

    if ($argsIsSet) {
        $oldShell = $__tinkerModeDefinedVars__['__psysh__'];
        $oldShell->runCommand("hist --show $lineStart..$endLine --save $histFile"); //get history from old shell

        //replace old executable history
        $rawHistory = file_get_contents($histFile);
        $formattedHistory = str_replace("\n", ';', $rawHistory);
        file_put_contents($histFile, '<?php ' . $formattedHistory);
    }

    $tinkerMod = __DIR__ . '/tinkerMod.php';
    $histFile = (($argsIsSet) ? $histFile : '');
    Process::forever()->tty()->run("clear && php artisan tinker $tinkerMod $histFile"); //start a new shell
};
