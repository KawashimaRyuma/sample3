// pwdコマンド　現在のコマンド
$pwd

// mkdirコマンド　ファルダを作るためのコマンド
mkdir 作成したいディレクトリ名
*mkdir howtolearn

// cdコマンド　ディレクトリを移動するためのコマンド
cd howtolearn

//これは、1つ上のディレクトリに戻ることです。
cd ..

//cd ~コマンドは、ホームディレクトリに戻れる.「cd」でも可能。
cd ~  もしくは  cd

//lsコマンドは、ディレクトリの中身を表示するためのコマンドです。
//するとlaravelというディレクトリが、現在のディレクトリに存在するということになる。ec2-user:~/environment/howtolearn (master) $ ls
laravel
mkdir laravel
ls

//gitを使う。Initialized empty Git repository in /home/ec2-user/environment/howtolearn/.git/
*mkdir howtolearn
cd howtolearn
git init

//git add ファイルを追加。ディレクトリ配下のすべてをトラッキングする状態のこと言う
*touch howtolearn
git add howtolearn
git add .

//git commit どういう理由でコミットしたか分かりやすくするため。
*git commit -m "howtolearn"

//git log　　履歴確認。commit 142392d27629d8827ce4c9abaeedc01e74aedf91 (HEAD -> master)
Author: KawashimaRyuma <ryumatennis@icloud.com>
Date:   Tue Oct 12 04:03:51 2021 +0000

Github　作成

//リポジトリ作成

//鍵の作成
mkdir ~/.ssh
$ chmod 700 ~/.ssh
$ cd ~/.ssh

//鍵の登録
ssh-keygen -t rsa -b 4096 -C "githubのemail"
 cat id_rsa.pub
 
 //push　　git remoteは、初めて利用する時に必要。Enumerating objects: 3, done.
 cd ~/ディレクトリ
  git remote add origin git@github.com:アカウント名/リポジトリ名.git
 git push -u origin master