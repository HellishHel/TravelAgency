var config = config || {};

config.methodName = 'tours';

config.deleteErrorMessage = 'Невозможно удалить выбранный тур, так как уже существуют заявки на него.';

config.searchDataPromise = [];
config.exceptFields = ['id', 'price_day', 'price_tickets'];