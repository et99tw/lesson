void main(){
  //定義
  final String a = 'EricOreo';
  const String b = 'SamAlbert';
  final c = 'com';
  //常量 不能修改
  //不能和 var 同用
  const List ls = [11,22,33];
  print(ls);
  //區別
  //需要確認值
  final dt = DateTime.now();
  //const dt = DateTime.now(); //這不可以  常量不能定義不固定的值
  print(dt);
  //內存忠 重複創建
  final lsf1 = [11,22,33];
  final lsf2 = [11,22,33];
  const lsc1 = [11,22,33];
  const lsc2 = [11,22,33];
  print(identical(lsf1, lsf2)); //false
  print(identical(lsc1, lsc2)); //true
}