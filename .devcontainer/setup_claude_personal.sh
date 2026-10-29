#!/bin/bash
# 個人用のClaude Codeカスタムスキル・サブエージェントを永続化するセットアップ。
# 複数マシン・複数devcontainerで共通利用するため、GitHubの個人リポジトリ
# （kumshige2/claude-skills-agents, private）にclone/pullし、
# ~/.claude/skills ・ ~/.claude/agents をそこへのシンボリックリンクにする。
#
# devcontainer再構築直後はgh未認証のためpost_create.shからは失敗する想定。
# その場合は `gh auth login` 実行後にこのスクリプトを単体で再実行すること。
set -e

REPO=https://github.com/kumshige2/claude-skills-agents
DEST="$HOME/.claude-personal"

if [ -d "$DEST/.git" ]; then
  git -C "$DEST" pull --ff-only
else
  git clone "$REPO" "$DEST"
fi

rm -rf "$HOME/.claude/skills" "$HOME/.claude/agents"
ln -s "$DEST/skills" "$HOME/.claude/skills"
ln -s "$DEST/agents" "$HOME/.claude/agents"
