<?hh
// Copyright 2004-present Facebook. All Rights Reserved.
function expect(darray<string,bool> $m):void { }
function testit():void {
  $m = dict<_,bool>[ 'a' => true ];
  hh_show($m);
  expect($m);
}
