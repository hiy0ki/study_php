<?php

// バッファリングされることの確認
// obはoutput bufferingの略

echo "a";
ob_start();
// ここから ob_end_clean()まではバッファリングされるので標準出力に表示されない
echo "b";
echo "c";
ob_end_clean();
echo "d";
