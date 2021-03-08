<?php

shell_exec('git add . && git commit -m "Update Cuaca tanggal ' . date("d M Y H:i") . ' " && git push');
