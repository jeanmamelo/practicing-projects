# Created by `pipx` on 2024-07-26 23:04:17
export PATH="$PATH:/home/jmelo/.local/bin"
export PATH=/usr/local/bin:$PATH

# Keep command history
HISTFILE=~/.zsh_history
HISTSIZE=10000
SAVEHIST=10000
setopt appendhistory

# Enable Powerlevel10k instant prompt. Should stay close to the top of ~/.zshrc.
# Initialization code that may require console input (password prompts, [y/n]
# confirmations, etc.) must go above this block; everything else may go below.
if [[ -r "${XDG_CACHE_HOME:-$HOME/.cache}/p10k-instant-prompt-${(%):-%n}.zsh" ]]; then
  source "${XDG_CACHE_HOME:-$HOME/.cache}/p10k-instant-prompt-${(%):-%n}.zsh"
fi

plugins=(zsh-autosuggestions fast-syntax-highlighting)

source ~/powerlevel10k/powerlevel10k.zsh-theme

# To customize prompt, run `p10k configure` or edit ~/.p10k.zsh.
[[ ! -f ~/.p10k.zsh ]] || source ~/.p10k.zsh
source /home/jeanmelo/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh
source ~/.zsh/zsh-autosuggestions/zsh-autosuggestions.zsh
fpath+=${ZSH_CUSTOM:-${ZSH:-~/.oh-my-zsh}/custom}/plugins/zsh-completions/src

bindkey ";5C" forward-word
bindkey ";5D" backward-word
bindkey "^H" backward-kill-word
bindkey "5~" kill-word

# aliases
alias bat=batcat
alias pip=/home/linuxbrew/.linuxbrew/bin/pip3
alias k9s=/snap/k9s/current/bin/k9s

export PATH=$PATH:/snap/bin

eval "$(/home/linuxbrew/.linuxbrew/bin/brew shellenv)"

# Set up fzf key bindings and fuzzy completion
source <(fzf --zsh)

# Created by `pipx` on 2025-01-16 17:18:08
export PATH="$PATH:/home/jeanmelo/.local/bin"

export PATH=$PATH:/usr/local/go/bin
